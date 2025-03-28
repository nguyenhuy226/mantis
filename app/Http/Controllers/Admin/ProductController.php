<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest\CreateProductRequest;
use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Http\Request;

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
        return view('page.products.productDetail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
