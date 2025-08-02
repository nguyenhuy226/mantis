<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(
        private ProductService  $productService,
    ) {}
    /**
     * Display a listing of the resource.
     * method: GET
     */
    public function index(Request $request)
    {
        $products = $this->productService->getListProductApi($request);
        return response()->json($products, 200);
    }

    /**
     * Display the specified product by its ID.
     *
     * This method retrieves the detailed information of a product using the given ID.
     * If the product is found, it returns the product data with a success message.
     * If not, it returns a 404 response indicating the product was not found.
     *
     * @param string $id The ID of the product to retrieve
     * @return \Illuminate\Http\JsonResponse JSON response containing the product data or an error message
     */

    public function show($id)
    {
        $product =  $this->productService->getProductDetailApi($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json([
            'message' => 'Product retrieved successfully',
            'product' => $product,
        ], 200);
    }

    /**
     * Get related products for the specified product.
     *
     * This method retrieves a list of related products based on the provided product ID.
     * If the product is found and has related items, it returns them as a JSON response.
     * Otherwise, it returns a 404 response indicating that the product was not found.
     *
     * @param int $id The ID of the product to retrieve related products for
     * @return \Illuminate\Http\JsonResponse JSON response containing related products or error message
     */
    public function getRelatedProducts($id)
    {
        $relatedProducts = $this->productService->getRelateProductsApi($id);
        if ($relatedProducts) {
            return response()->json([
                'related_products' => $relatedProducts
            ]);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}
