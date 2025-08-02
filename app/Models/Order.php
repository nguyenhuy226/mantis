<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";

    protected $fillable = [
        'customer_id',
        'code',
        'total_price',
        'status',
        'address_id',
        'payment_method',
    ];

    /**
     * Get the customer that owns the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function address() {
        return $this->belongsTo(Address::class);
    }

    /**
     * Get the orderDetail that owns the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
