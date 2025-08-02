<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        private AuthService  $authService,
    ) {}

    /**
     * Authenticate the customer and generate access tokens.
     *
     * This method handles login logic by passing the validated login request
     * to the AuthService, which returns the authentication response data and status.
     *
     * @param \App\Http\Requests\LoginRequest $request The validated login credentials.
     * @return \Illuminate\Http\JsonResponse JSON response containing access token, user info, or error message.
     */
    public function login(LoginRequest $request)
    {
        $data = $this->authService->loginCustomer($request);
        return response()->json($data['data'], $data['status']);
    }

    /**
     * Log out the authenticated customer.
     *
     * This method invalidates the current access token of the authenticated customer
     * by delegating the logic to the AuthService.
     *
     * @param \Illuminate\Http\Request $request The current HTTP request containing authentication information.
     * @return \Illuminate\Http\JsonResponse JSON response indicating logout success or failure.
     */
    public function logout(Request $request)
    {
        $data = $this->authService->logoutCustomer($request);
        return response()->json($data['data'], $data['status']);
    }


    /**
     * Refresh the user's authentication token.
     *
     * This method handles token refreshing by delegating to the AuthService.
     * It expects a valid refresh token in the request and returns a new access token
     * if the refresh token is valid.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request containing the refresh token.
     * @return \Illuminate\Http\JsonResponse JSON response with the new token data and appropriate status code.
     */
    public function refreshToken(Request $request)
    {
        $data = $this->authService->refreshToken($request);
        return response()->json($data['data'], $data['status']);
    }
}
