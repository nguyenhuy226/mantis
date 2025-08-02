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
        // dd($data);
        // check if there is an image file
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/product'), $imageName);

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
                    $oldImagePath = public_path('images/product/' . $image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath); // delete file
                    }
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/product'), $imageName);

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

    /**
     * Retrieve related products for a given product ID.
     *
     * This method delegates the logic to the Product model,
     * where related products are determined (e.g., by category, tags, or manual linkage).
     *
     * @param int $id The ID of the product to find related items for.
     * @return \Illuminate\Support\Collection|\Illuminate\Database\Eloquent\Collection
     *         A collection of related products.
     */
    public function getRelatedProducts($id)
    {
        return Product::getRelatedProducts($id);
    }


    /**
     * Retrieve a paginated list of products based on filter parameters from the request.
     *
     * This method supports filtering by category, name, price range, and selecting specific fields.
     * It also supports pagination and sorting by price.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request with query parameters
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator Paginated list of products
     */
    public function  getListProductApi($request)
    {
        $limit = $request->query('limit', 10);
        $category = $request->query('category');
        $name = $request->query('name');
        $fields = $request->query('fields');
        $minPrice = $request->query('minPrice');
        $maxPrice = $request->query('maxPrice');
        $page = $request->query('page', 1);
        $soft = $request->query('soft', 'asc');

        $query = Product::query();
        if ($category && $category !== 'false') {
            $query->where('category_id', $category);
        }

        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }

        if ($minPrice && $minPrice !== 'false') {
            $query->where('price', '>=', $minPrice);
        }
        if ($maxPrice && $maxPrice !== 'false') {
            $query->where('price', '<=', $maxPrice);
        }

        if ($fields) {
            $fieldsArray = explode(',', $fields);
            $query->select($fieldsArray);
        }

        $query->orderBy('price', $soft);

        $products = $query->paginate($limit, ['*'], 'page', $page);
        return $products;
    }

    /**
     * Retrieve product details by its ID.
     *
     * Returns the product instance if found, otherwise returns null.
     *
     * @param $id The ID of the product to retrieve
     * @return \App\Models\Product|null The product instance or null if not found
     */
    public function getProductDetailApi($id)
    {
        return Product::find($id);
    }

    /**
     * Retrieve a list of randomly selected related products excluding the given product.
     *
     * Returns false if the product with the given ID does not exist.
     *
     * @param int|string $id The ID of the current product
     * @return \Illuminate\Support\Collection|false A collection of related products or false if product not found
     */
    public function getRelateProductsApi($id)
    {
        $currentProduct = Product::find($id);
        if (!$currentProduct) {
            return false;
        }
        $relatedProducts = Product::where('id', '!=', $id)
            ->inRandomOrder()
            ->limit(5)
            ->get();
        return $relatedProducts;
    }
}
