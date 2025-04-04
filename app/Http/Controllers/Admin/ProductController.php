<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest\CreateProductRequest;
use App\Http\Requests\ProductRequest\UpdateProductRequest;
use App\Services\CategoryService;
use App\Services\ProductService;

class ProductController extends Controller
{

    public function __construct(
        private ProductService  $productService,
        private CategoryService $categoryService,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productList = $this->productService->getProductList();
        return view('page.products.productsList', ['productList' => $productList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categoryService->getListCategory();
        return view('page.products.createProduct', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {

        $meseage = $this->productService->createProduct($request);

        return redirect()->route('products.index')->with('status', $meseage);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productRelated = $this->productService->getRelatedProducts($id);
        $product = $this->productService->getProductDetail($id);
        if ($product) {
            return view('page.products.productDetail', ['product' => $product, 'productRelated' => $productRelated]);
        } else {
            return view('page._404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = $this->productService->getProductDetail($id);
        $categories = $this->categoryService->getListCategory();
        return view('page.products.editProduct', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $this->productService->updateProduct($request, $id);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = $this->productService->deleteProduct($id);

        return redirect()->route('products.index')->with('message', $message);
    }
}
