<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="product";

    protected $fillable=[

        'product_name',
        'description',
       'unit_price',

    ];

    // relationship of productstocklisting to product
    public function productStocklisting(){
        return $this->hasOne(ProductStocklisting::class)->withDefault();

}
}