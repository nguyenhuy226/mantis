<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    const STATUS_IN_STOCK = 'In Stock';
    const STATUS_STOCK = 'Stock';
    const STATUS_PENDING = 'Pending';

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


    public function relatedProducts()
    {
        return $this->where('id', '!=', $this->id);
    }

    public function wishlistedBy()
    {
        return $this->belongsToMany(Customer::class, 'wishlist', 'product_id', 'customer_id')->withTimestamps();
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

    /**
     * Get the details of a product by their ID.
     *
     * @param int $id The ID of the user to retrieve.
     * @return \App\Models\Product|null The product instance if found, null otherwise.
     */
    public static function getProductDetail($id)
    {
        return self::find($id);
    }

    /**
     * Delete a product by their ID.
     *
     * @param int $id The ID of the user to delete.
     * @return bool True if the product was deleted successfully, false otherwise.
     */
    public static function deleteProduct($id)
    {
        $product = self::find($id);
        return $product->delete();
    }


    /**
     * Get the related products for a given product ID.
     *
     * This method attempts to find the product by ID and then fetch its related products.
     * If the product is not found or has no related products, it returns an empty array.
     *
     * @param int $id The ID of the product.
     * @return \Illuminate\Support\Collection|array A collection of related products or an empty array.
     */
    public static function getRelatedProducts($id)
    {
        $product = Product::find($id);
        $related =  $product?->relatedProducts()->get();
        if ($related) {
            return $related;
        } else {
            return [];
        }
    }


    /**
     * Get the name of the product status based on its numeric value.
     *
     * This accessor returns a human-readable status string using constants
     * defined in the Product model. If the status is not recognized, it returns
     * the raw status value.
     *
     * @return string|int
     */

    public function getNameStatusAttribute()
    {
        switch ($this->status) {
            case 1:
                return Product::STATUS_IN_STOCK;
            case 0:
                return Product::STATUS_STOCK;
            default:
                // return Product::STATUS_PENDING;
                return $this->status;
        }
    }

    /**
     * Update product information by product ID.
     *
     * This method finds a product by its ID and updates it with the provided data.
     * If the product is not found, a ModelNotFoundException will be thrown.
     *
     * @param array $data The validated data to update the product.
     * @param int $id The ID of the product to update.
     *
     * @return void
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public static function updateProduct($data, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($data);
    }
}
