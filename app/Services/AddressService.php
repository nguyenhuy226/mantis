<?php

namespace App\Services;

class AddressService
{
    /**
     * Retrieves all addresses associated with the authenticated customer.
     *
     * @param \Illuminate\Http\Request $request
     *        The request instance containing the authenticated user.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     *         A collection of the customer's addresses.
     */
    public function getAddresses($request)
    {
        $customer = $request->user();
        return $customer->addresses;
    }

    /**
     * Adds a new address for the authenticated customer.
     *
     * Logic:
     * - Lấy dữ liệu đã được validated từ request.
     * - Nếu đây là địa chỉ đầu tiên, tự động đặt làm địa chỉ mặc định.
     * - Nếu địa chỉ được đánh dấu là mặc định (`default = true`), thì bỏ mặc định tất cả các địa chỉ khác trước đó.
     * - Tạo mới địa chỉ với dữ liệu đã xử lý.
     *
     * @param \Illuminate\Http\Request $request
     *        The request containing validated address data.
     *
     * @return \App\Models\Address
     *         The newly created address.
     */
    public function addAddress($request)
    {
        $data = $request->validated();

        $customer = $request->user();
        if ($customer->addresses()->count() === 0) {
            $data['default'] = true;
        }
        if (isset($data['default']) && $data['default'] === true) {
            $customer->addresses()->update(['default' => false]);
        }
        $address = $customer->addresses()->create($data);
        return $address;
    }


    /**
     * Updates a specific address for the authenticated customer.
     *
     * This method:
     * - Validates the request data.
     * - Finds the address by ID among the customer's addresses.
     * - If the `default` field is set to true, resets all other addresses' default flag.
     * - Updates the target address with the new data.
     *
     * @param \Illuminate\Http\Request $request
     *        The request containing validated address update data.
     * @param int|string $id
     *        The ID of the address to update.
     *
     * @return \App\Models\Address
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *         If the address does not belong to the authenticated customer or doesn't exist.
     */
    public function updateAddress($request, $id)
    {
        $data = $request->validated();
        $customer = $request->user();
        $address = $customer->addresses()->findOrFail($id);
        if (isset($data['default']) && $data['default'] === true) {
            $customer->addresses()->update(['default' => false]);
        }
        $address->update($data);
        return $address;
    }

    /**
     * Retrieves the detail of a specific address belonging to the authenticated customer.
     *
     * This method:
     * - Gets the authenticated customer from the request.
     * - Finds the address by its ID from the customer's own addresses.
     * - Returns the address if found.
     *
     * @param \Illuminate\Http\Request $request
     *        The current HTTP request containing the authenticated customer.
     * @param int|string $id
     *        The ID of the address to retrieve.
     *
     * @return \App\Models\Address
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *         If the address with the given ID is not found for the customer.
     */
    public function getAddressDetail($request, $id)
    {
        $customer = $request->user();
        $address = $customer->addresses()->findOrFail($id);
        return $address;
    }

    /**
     * Deletes a specific address belonging to the authenticated customer.
     *
     * This method:
     * - Retrieves the currently authenticated customer from the request.
     * - Finds the address by ID within the customer's own addresses.
     * - Deletes the address if found.
     *
     * @param \Illuminate\Http\Request $request
     *        The current HTTP request containing the authenticated customer.
     * @param int|string $id
     *        The ID of the address to delete.
     *
     * @return void
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *         If the address with the given ID does not belong to the customer.
     */
    public function deleteAddress($request, $id)
    {
        $customer = $request->user();
        $address = $customer->addresses()->findOrFail($id);

        $address->delete();
    }
}
