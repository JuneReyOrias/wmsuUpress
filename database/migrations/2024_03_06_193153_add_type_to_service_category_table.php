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
        Schema::table('service_category', function (Blueprint $table) {
            $table->string('type',50);
            $table->string('size',100);
            $table->string('unit',50);
            $table->string('unit_price',50);
            $table->string('status',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_category', function (Blueprint $table) {
            //
        });
    }
};
