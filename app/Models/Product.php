<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_id',
        'name',
        'height',
        'width',
        'base_material',
        'lampshade_material',
        'light_source',
        'light_source_connectors',
        'light_source_quantity',
        'power',
        'price',
        'lumens',
        'color_temperature_max',
        'color_temperature_min',
        'description',
        'img_path'
    ];

    public function orderToProducts() {
        return $this->hasMany(OrderToProduct::class);
    }

    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }
}
