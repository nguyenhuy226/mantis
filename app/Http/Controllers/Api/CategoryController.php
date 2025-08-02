<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;


class CategoryController extends Controller
{
    public function __construct(
        private CategoryService  $categoryService,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = Category::all();
        $categories = $this->categoryService->getListCategory();
        return response()->json($categories, 200);
    }

}
