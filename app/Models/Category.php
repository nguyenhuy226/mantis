<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = "categories";

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function getListCategory()
    {
        return self::all();
    }
}
