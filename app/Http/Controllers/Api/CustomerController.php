<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest\CreateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    // $validatedData = $request->validate();
    // $validatedData['password'] = Hash::make($validatedData['password']);

    // $customer = Customer::create($validatedData);

    // return response()->json(['message' => 'Customer registered successfully', 'customer' => $customer], 201);
    public function register(CreateCustomerRequest $request)
    {
        return response()->json(['message' => 'Customer registered successfully'], 201);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'remember_me' => 'nullable|boolean',
        ]);

        $customer = Customer::where('email', $validatedData['email'])->first();

        if (!$customer || !Hash::check($validatedData['password'], $customer->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Tạo token đăng nhập (nếu cần)
        $token = $customer->createToken('customer-token')->plainTextToken;

        return response()->json(['message' => 'Login successful', 'token' => $token, 'customer' => $customer], 200);
    }
}
