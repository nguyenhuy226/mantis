<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    /**
     * create Product
     * @param CreatProductRequest $request
     * @return string
     */
    public function createProduct($request): string
    {
        $data = $request->validated();
        $data['product_code'] = time();
        $data['keyword'] = $data['name'];
        $data['slug'] = $data['name'];
        $data['sku'] = $data['name'];

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

    /**
     * get product list
     *
     * @return Product
     */
    public function getProductList()
    {
        return Product::getProductlist(1);
    }

    /**
     * get product detail.
     * @param string|int  $id
     * @return Product
     */
    public function getProductDetail(string|int $id)
    {
        return Product::getProductDetail($id);
    }

    /**
     * update product.
     * @param request $data
     * @param string|int $id
     *
     */
    public function updateProduct($request, string|int $id): string
    {
        $data = $request->validated();
        try {
            $image = Product::getProductDetail($id)->image;
            // check if there is an image file
            if ($request->hasFile('image')) {
                // check if there are old photos
                if ($image) {
                    $oldImagePath = public_path('images/application/' . $image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath); // delete file
                    }
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/application'), $imageName);

                // Save file name to authenticated data
                $data['image'] = $imageName; // Update file name to data array
            }
            Product::updateProduct($data, $id);
            return $message = 'update product successly';
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * delete product.
     * @param string|int $id
     */

    public function deleteProduct(string|int $id)
    {
        try {
            $product = Product::deleteProduct($id);
            return 'đã xóa Product thành công';
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

    public function getRelatedProducts($id)
    {
        return Product::getRelatedProducts($id);
    }
}
