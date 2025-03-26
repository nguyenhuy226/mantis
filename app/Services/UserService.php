<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    /**
     * create user
     *
     * @return string
     */
    public function createUser($request)
    {
        $data = $request->validated();

        // check if there is an image file
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/application'), $imageName);

            // Save file name to authenticated data
            $data['image'] = $imageName; // Update file name to data array

        }
        User::createProduct($data);
    }

    /**
     * get user list
     *
     * @return User
     */
    public function getUserList()
    {
        return User::getUserlist();
    }

    /**
     * get user detail.
     * @param string|int  $id
     * @return User
     */
    public function getUserDetail(string|int $id)
    {
        try {
            $user = User::getUserDetail($id);
            return $user;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    //      /**
    //      * update product.
    //      * @param array $data
    //      * @param string|int $id
    //      *
    //      */
    //     public function updateProduct(array $data, string|int $id): void
    //     {
    //         $product = Product::findOrFail($id);
    //         $product->update($data);
    //     }

    /**
     * deleta user.
     * @param string|int $id
     */

    public function deleteUser(string|int $id)
    {
        try {
            $product = User::deleteUser($id);
            return 'đã xóa User thành công';
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    //     // public function restoreUser($id): User
    //     // {
    //     //     // Khôi phục user đã bị xóa mềm
    //     //     $user = User::withTrashed()->find($id); // Tìm cả bản ghi đã bị xóa mềm
    //     //     return $user->restore();
    //     // }
    // }
}
