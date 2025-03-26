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
            $request->image->move(public_path('images/user'), $imageName);

            // Save file name to authenticated data
            $data['image'] = $imageName; // Update file name to data array

        }
        User::createUser($data);
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

    /**
     * update user.
     * @param array $data
     * @param string|int $id
     *
     */
    public function updateUser($request, string|int $id): void
    {
        $data = $request->validated();
        $image = User::getUserDetail($id)->image;

        // check if there is an image file
        if ($request->hasFile('image')) {
            // check if there are old photos
            if ($image) {
                $oldImagePath = public_path('images/user/' . $image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // delete file
                }
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/user'), $imageName);

            // Save file name to authenticated data
            $data['image'] = $imageName; // Update file name to data array
        }
        User::updateUser($data, $id);
    }

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
