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
        return view('page.products.productsList');
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
        $data = $request->validated();
        $data['product_code'] = time();
        $data['keyword'] = $data['name'];
        $data['slug'] = $data['name'];
        $data['sku'] = $data['name'];
        $data['image'] = $data['name'];

        // dd($data);
        // $this->productService->createProduct($data);

        // Kiểm tra xem có file ảnh không
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/application'), $imageName);

            // Lưu tên file vào dữ liệu đã xác thực
            $data['image'] = $imageName; // Cập nhật tên file vào mảng dữ liệu
            $this->productService->createProduct($data);
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được tạo thành công.');

        } else {
            return redirect()->back()->with('error', 'không load được file ảnh');
        }

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được tạo thành công.');
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
