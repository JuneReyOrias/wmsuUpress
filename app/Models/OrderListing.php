<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderListing extends Model
{
    use HasFactory;
  protected $table= "order_listing";

  protected $fillable= [

    'purchase_order_id',
    'service_id',
    'product_id',
    'product_stocklisting_id',
    'qty',
    'unit_price',
    'discount',
    'total',
  ];

//  relationship of purchase order to order listing
  public function purchaseOrder(){
    return $this->belongsTo(PurchaseOrder::class, 'purchase_order_id')->withDefault();
  }

// relationship of service order  to order listing  
public function serviceOrder(){
    return $this->belongsTo(ServiceOrder::class, 'service_order_id')->withDefault();
}

// relationship of product to order listing
public function product(){
    return $this->belongsTo(Product::class, 'product_id')->withDefault();
}
}
