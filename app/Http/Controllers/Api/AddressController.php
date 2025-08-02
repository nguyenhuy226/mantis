<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest\CreateAddressRequest;
use App\Services\AddressService;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function __construct(
        private AddressService  $addressService,
    ) {}

    /**
     * Retrieve all addresses associated with the authenticated customer.
     *
     * This method fetches the list of addresses belonging to the currently logged-in user.
     *
     * @param \Illuminate\Http\Request $request The HTTP request instance (must be authenticated).
     * @return \Illuminate\Http\JsonResponse JSON response containing the list of addresses.
     */
    public function getAddresses(Request $request)
    {
        $addresses = $this->addressService->getAddresses($request);
        return response()->json(['data' => $addresses], 200);
    }

    /**
     * Add a new address for the authenticated customer.
     *
     * This method handles creating a new address using validated request data.
     *
     * @param \App\Http\Requests\CreateAddressRequest $request The validated request containing address information.
     * @return \Illuminate\Http\JsonResponse JSON response with the created address data.
     */
    public function addAddress(CreateAddressRequest $request)
    {
        $address = $this->addressService->addAddress($request);
        return response()->json(['message' => 'Address added successfully', 'address' => $address], 201);
    }

    /**
     * Update an existing address for the authenticated customer.
     *
     * This method handles updating address information based on the provided ID.
     * It uses validated data from the request and ensures the address belongs to the authenticated user.
     *
     * @param \App\Http\Requests\CreateAddressRequest $request The validated request containing address fields.
     * @param int $id The ID of the address to be updated.
     * @return \Illuminate\Http\JsonResponse JSON response containing the updated address data.
     */
    public function updateAddress(CreateAddressRequest $request, $id)
    {
        $address = $this->addressService->updateAddress($request, $id);
        return response()->json(['message' => 'Address updated successfully', 'data' => $address], 200);
    }


    /**
     * Retrieve the detail of a specific address for the authenticated customer.
     *
     * This method fetches address information by its ID, ensuring it belongs
     * to the currently authenticated user.
     *
     * @param \Illuminate\Http\Request $request The HTTP request instance (used to access the authenticated user).
     * @param int $id The ID of the address to retrieve.
     * @return \Illuminate\Http\JsonResponse JSON response containing the address data.
     */
    public function getAddressDetail(Request $request, $id)
    {
        $address = $this->addressService->getAddressDetail($request, $id);
        return response()->json(['data' => $address], 200);
    }


    /**
     * Delete a specific address of the authenticated customer.
     *
     * This method delegates the deletion logic to the AddressService
     * and returns a success response upon completion.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request, containing the authenticated user.
     * @param int $id The ID of the address to delete.
     * @return \Illuminate\Http\JsonResponse JSON response confirming the deletion.
     */
    public function deleteAddress(Request $request, $id)
    {
        $this->addressService->deleteAddress($request, $id);
        return response()->json(['message' => 'Address deleted successfully'], 200);
    }
}
