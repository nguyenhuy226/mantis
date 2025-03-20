<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    /**
     * create Product
     *
     * @return string
     */
    public function createProduct($request): string
    {
        $data = $request->validated();
        $data['product_code'] = time();
        $data['keyword'] = $data['name'];
        $data['slug'] = $data['name'];
        $data['sku'] = $data['name'];
        $data['image'] = $data['name'];

        // check if there is an image file
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/application'), $imageName);

            // Save file name to authenticated data
            $data['image'] = $imageName; // Update file name to data array
            Product::createProduct($data);
            return 'Sản phẩm đã được tạo thành công.';

        } else {
            return 'không load được file ảnh';
        }
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
