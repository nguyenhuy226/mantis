<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    /**
     * Get the user that owns the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
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
