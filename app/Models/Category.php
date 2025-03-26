<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = "categories";

    /**
     * Get the products that owns the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\Hasmany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get categories list .
     * @param string 
     * @return Categories
     */
    public static function getListCategory($status)
    {
        return self::all();
    }
}
