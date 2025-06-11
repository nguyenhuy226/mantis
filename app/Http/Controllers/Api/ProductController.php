<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * method: GET
     */
    public function index(Request $request)
    {
       // Lấy các query parameters
    $limit = $request->query('limit', 10); // Mặc định là 10
    $category = $request->query('category'); // Lọc theo danh mục
    $name = $request->query('name'); // Lọc theo tên sản phẩm
    $fields = $request->query('fields'); // Các trường cần trả về
    $minPrice = $request->query('minPrice'); // Giá tối thiểu
    $maxPrice = $request->query('maxPrice'); // Giá tối đa
    $page = $request->query('page', 1); // Trang hiện tại (mặc định là trang 1)
    $soft = $request->query('soft', 'asc'); // Sắp xếp (mặc định là tăng dần)

    // Query cơ bản
    $query = Product::query();
    // Lọc theo danh mục
    if ($category && $category !== 'false') {
        // dd($category);
        $query->where('category_id', $category);
    }

    // Lọc theo tên sản phẩm
    if ($name) {
        $query->where('name', 'like', '%' . $name . '%');
    }

    // Lọc theo khoảng giá
    if ($minPrice && $minPrice !== 'false') {
        $query->where('price', '>=', $minPrice);
    }
    if ($maxPrice && $maxPrice !== 'false') {
        $query->where('price', '<=', $maxPrice);
    }

    // Chọn các trường cần trả về
    if ($fields) {
        $fieldsArray = explode(',', $fields);
        $query->select($fieldsArray);
    }

    // Sắp xếp theo giá (hoặc trường khác nếu cần)
    $query->orderBy('price', $soft);

    // Phân trang và giới hạn số lượng sản phẩm trả về
    $products = $query->paginate($limit, ['*'], 'page', $page);

    // Trả về kết quả dưới dạng JSON
    return response()->json($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     * method: POST
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * method; PUT
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * method: DELETE
     */
    public function destroy(string $id)
    {
        //
    }
}
