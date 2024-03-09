<?php

namespace App\Listeners;
use App\Models\Product;
use App\Events\ProductViewed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateProductViews
{
    public function handle(ProductViewed $event)
    {
        // Increment the view count for the product
        $product = Product::find($event->productId);
        $product->views++;
        $product->save();
    }
}
