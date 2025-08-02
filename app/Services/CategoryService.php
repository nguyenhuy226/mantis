<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    /**
     * get list categories
     *
     * @return Category
     */
    public function getListCategory()
    {
        return Category::getListCategory(1) ;
    }
}
