<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGenerateIDProductTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { 
        DB::unprepared('
        CREATE TRIGGER tg_product_insert BEFORE INSERT ON product FOR EACH ROW
            BEGIN
                INSERT INTO product_sequence VALUES (NULL);
                SET NEW.id = CONCAT("prod-", LPAD(LAST_INSERT_ID(), 5, "0"));
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS tg_product_insert');
    }
}
