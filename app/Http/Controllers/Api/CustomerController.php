<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest\CreateCustomerRequest;
use App\Http\Requests\CustomerRequest\UpdateCustomerRequest;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(
        private CustomerService  $customerService,
    ) {}

    /**
     * Register a new customer account.
     *
     * This method handles the creation of a new customer using the provided validated request data.
     * It delegates the logic to the CustomerService and returns a JSON response upon success.
     *
     * @param \App\Http\Requests\CreateCustomerRequest $request The validated registration data.
     * @return \Illuminate\Http\JsonResponse JSON response with a success message and customer information.
     */
    public function register(CreateCustomerRequest $request)
    {
        $customer = $this->customerService->register($request);

        return response()->json(['message' => 'Customer registered successfully', 'customer' => $customer], 201);
    }

    /**
     * Retrieve the authenticated user's information.
     *
     * This method returns the currently authenticated user
     * along with a success message.
     *
     * @param \Illuminate\Http\Request $request The incoming request instance.
     * @return \Illuminate\Http\JsonResponse JSON response with user data and a success message.
     */
    public function getUser(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'message' => 'User retrieved successfully',
            'user' => $user,
        ], 200);
    }


    /**
     * Update the authenticated user's profile.
     *
     * This method handles updating the customer's personal information
     * using validated data from the request.
     *
     * @param \App\Http\Requests\UpdateCustomerRequest $request The validated request containing updated user data.
     * @return \Illuminate\Http\JsonResponse JSON response containing the updated user and a success message.
     */
    public function updateUser(UpdateCustomerRequest $request)
    {
        $user = $this->customerService->updateUser($request);
        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user,
        ], 200);
    }
}
