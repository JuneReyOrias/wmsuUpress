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
        Schema::create('services_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materials_stocklisting_id')->nullable();
            $table->foreignId('materials_id')->nullable();
            $table->double('qty',8,2);
            $table->foreignId('service_parameter_id')->nullable();
            $table->foreignId('service_category_id')->nullable();
            $table->double('total_price',8,2);
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_order');
    }
};
