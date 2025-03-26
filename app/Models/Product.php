<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = "products";
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'product_code',
        'category_id',
        'keyword',
        'quantity',
        'description',
        'image',
        'status',
        'price',
        'slug',
        'sku'
    ];

    /**
     * Get the category that owns the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the orderDeatils that owns the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\Hasmany
     */
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    /**
     * Create a new product.
     *
     * @param array $data The data for the product to be created.
     * @return \App\Models\Product The newly created product instance.
     */
    public static function createProduct(array $data)
    {
        return self::create($data);
    }

    /**
     * Get a list of products.
     *
     * @param mixed $status The status filter for the products (optional).
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] A collection of product instances.
     */
    public static function getProductList($status)
    {
        return self::all();
    }
}
