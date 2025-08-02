<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerService
{
    /**
     * Register a new customer.
     *
     * This method handles the registration of a new customer by validating
     * the input data, hashing the password, and creating a new customer record
     * in the database.
     *
     * @param \App\Http\Requests\CreateCustomerRequest $request The validated registration request.
     * @return \App\Models\Customer The newly created customer instance.
     */
    public function register($request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        return Customer::create($data);
    }

    /**
     * Update the authenticated customer's profile.
     *
     * This method updates the currently authenticated customer's information
     * using the validated request data. If a new password is provided, it will be hashed
     * before updating. Returns the updated user instance.
     *
     * @param \App\Http\Requests\UpdateCustomerRequest|\Illuminate\Http\Request $request The validated request with update data.
     * @return \App\Models\Customer The updated customer instance.
     */
    public function updateUser($request)
    {
        $data = $request->validated();
        $user = $request->user();
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        $user->update($data);
        return $user;
    }
}
