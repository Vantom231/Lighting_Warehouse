<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orderToUsers() {
        return $this->hasMany(OrderToUser::class);
    }

    public function orderToProducts() {
        return $this->hasMany(OrderToProduct::class);
    }
}
