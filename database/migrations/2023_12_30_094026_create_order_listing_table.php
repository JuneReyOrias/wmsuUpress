<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_listing', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_order_id')->nullable();
            $table->foreignId('service_order_id')->nullable();
            $table->foreignId('product_id')->nullable();
            $table->foreignId('product_stocklisting_id')->nullable();
            $table->double('qty',8,2);
            $table->double('unit_price',8,2);
            $table->string('discount',50);
            $table->double('total',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_listing');
    }
};
