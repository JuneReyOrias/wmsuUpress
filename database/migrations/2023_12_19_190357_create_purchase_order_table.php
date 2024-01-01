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
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->id();
            $table->string('order_date',50);
            $table->foreignId('users_id')->nullable();
            $table->foreignId('customer_id')->nullable();
            $table->foreignId('staff_id')->nullable();
            $table->string('status',50);
            $table->string('required_date',50);
            $table->string('exp_div_date',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order');
    }
};
