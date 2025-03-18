<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    /**
     * get product list.
     *
     * @return User
     */
    public function createUser(array $data): User
    {
        return User::createUser($data);
    }

    //     /**
    //      * create product.
    //      * @param array $data
    //      * @return Product
    //      */
    //     public function createProduct(array $data): Product
    //     {
    //         return Product::create($data);
    //     }
    //      /**
    //      * get product detail.
    //      * @param string|int  $id
    //      * @return Product
    //      */
    //     public function getProductDetail(string|int $id): Product
    //     {
    //         return Product::getProductDetail($id);
    //     }

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

    //      /**
    //      * deleta product.
    //      * @param string|int $id
    //      */

    //     public function deleteProduct(string|int $id): void
    //     {
    //         $product = Product::findOrFail($id);
    //         $product->delete();
    //     }

    //     // public function restoreUser($id): User
    //     // {
    //     //     // Khôi phục user đã bị xóa mềm
    //     //     $user = User::withTrashed()->find($id); // Tìm cả bản ghi đã bị xóa mềm
    //     //     return $user->restore();
    //     // }
    // }
}
