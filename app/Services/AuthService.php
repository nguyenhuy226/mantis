<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\PersonalAccessToken;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * Handle user authentication attempt.
     *
     * Validates the user credentials and attempts to log in using Laravel's Auth system.
     * - If credentials are correct and user status is active, returns `true`.
     * - If credentials are correct but user account is locked (status != 1), logs out and returns `'locked'`.
     * - If authentication fails, returns `false`.
     *
     * @param \Illuminate\Http\Request $request  The login request containing validated credentials.
     * @return bool|string  Returns `true` on success, `'locked'` if the account is disabled, or `false` on failure.
     */
    public function login($request)
    {
        $data = $request->validated();
        $cer = Auth::attempt(['email' => $data['email'], 'password' => $data['password']], $request->remember);
        if ($cer) {
            if (Auth::user()->status != 1) {
                Auth::logout();
                return 'locked'; // Trả về string đặc biệt để controller xử lý
            }
            return true;
        }

        return false;
    }


    /**
     * Handle the customer login process using email and password.
     *
     * Validates credentials and generates an access token and a refresh token.
     * Access token is created via Laravel Sanctum and set to expire in 3 minutes.
     * If the customer already has a refresh token, it is reused. Otherwise, a new one is generated and stored.
     *
     * @param \Illuminate\Http\Request|\App\Http\Requests\LoginRequest $request
     *        The request object containing validated email and password fields.
     *
     * @return array{
     *     data: array{
     *         accessToken: string,
     *         refreshToken: string
     *     }|array{message: string},
     *     status: int
     * }
     */
    public function loginCustomer($request)
    {
        $data = $request->validated();

        $customer = Customer::where('email', $data['email'])->first();

        if (!$customer || !Hash::check($data['password'], $customer->password)) {
            return [
                'data' => ['message' => 'Invalid credentials'],
                'status' => 401
            ];
        }

        $accessToken = $customer->createToken('customer-token')->plainTextToken;
        $token = $customer->tokens()->latest('id')->first();

        if ($token) {
            $token->update(['expires_at' => now()->addMinutes(3)]);
        }

        $accessToken = explode('|', $accessToken)[1];

        if ($customer->refresh_token) {
            $refreshToken = $customer->refresh_token;
        } else {
            $refreshToken = bin2hex(random_bytes(40));
            $customer->refresh_token = $refreshToken;
            $customer->save();
        }

        return [
            'data' => [
                'accessToken' => $accessToken,
                'refreshToken' => $refreshToken,
            ],
            'status' => 200
        ];
    }


    /**
     * Logs out the authenticated customer by revoking the provided access token.
     *
     * This method validates the provided `accessToken`, hashes it, then looks for a matching
     * record in the `personal_access_tokens` table. If found, it deletes the token associated
     * with the currently authenticated customer, effectively logging them out.
     *
     * @param \Illuminate\Http\Request $request
     *        The request object containing the accessToken to be revoked.
     *
     * @return array{
     *     data: array{message: string},
     *     status: int
     * }
     */
    public function logoutCustomer($request)
    {
        $validatedData = $request->validate([
            'accessToken' => 'required|string',
        ]);
        $customer = $request->user();
        $oldAccessToken = PersonalAccessToken::where('token', hash('sha256', $validatedData['accessToken']))->first();
        if (!$oldAccessToken) {
            return [
                'data' => ['message' => 'Invalid access token'],
                'status' => 401
            ];
        };
        $customer->tokens()->where('token', $oldAccessToken->token)->delete();
        return [
            'data' => ['message' => 'Logged out successfully'],
            'status' => 200
        ];
    }


    /**
     * Refreshes the customer's access token using a valid refresh token.
     *
     * This method:
     * - Validates the `refreshToken` and `accessToken`.
     * - Finds the corresponding customer via the `refreshToken`.
     * - Verifies the `accessToken` exists in the `personal_access_tokens` table.
     * - Deletes the old access token.
     * - Issues a new access token and updates its expiration time (3 minutes).
     *
     * @param \Illuminate\Http\Request $request
     *        The HTTP request containing both `refreshToken` and `accessToken`.
     *
     * @return array{
     *     data: array{
     *         accessToken: string,
     *         refreshToken: string
     *     },
     *     status: int
     * }
     */
    public function refreshToken($request)
    {
        $validatedData = $request->validate([
            'refreshToken' => 'required|string',
            'accessToken' => 'required|string',
        ]);

        $customer = Customer::where('refresh_token', $validatedData['refreshToken'])->first();

        if (!$customer) {
            return [
                'data' => ['message' => 'Invalid refresh token'],
                'status' => 401
            ];
        }

        $oldAccessToken = PersonalAccessToken::where('token', hash('sha256', $validatedData['accessToken']))->first();

        if (!$oldAccessToken) {
            return [
                'data' => ['message' => 'Invalid access token'],
                'status' => 401
            ];
        }


        $customer->tokens()->where('token', $oldAccessToken->token)->delete();
        // Tạo Access Token mới
        $accessToken = $customer->createToken('customer-token')->plainTextToken;

        $token = $customer->tokens()->latest('id')->first();
        if ($token) {
            $token->update(['expires_at' => now()->addMinutes(3)]); // Thời hạn 3 phút
        }
        $accessToken = explode('|', $accessToken)[1];
        return [
            'data' => [
                'accessToken' => $accessToken,
                'refreshToken' => $customer->refresh_token,
            ],
            'status' => 200
        ];
    }
}
