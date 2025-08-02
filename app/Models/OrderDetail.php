<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_items";
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];
     /**
     * Get the order that owns the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongTo
    */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

     /**
     * Get the product that owns the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongTo
    */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
