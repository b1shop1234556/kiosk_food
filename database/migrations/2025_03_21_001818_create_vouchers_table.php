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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id('voucher_id');
            $table->string('voucher_code');
            $table->string('description');
            $table->string('voucher_type');
            $table->enum('discount_type', ['bundle_meal_1', 'bundle_meal_2', 'bundle_meal_3', 'bundle_meal_4']);
            $table->decimal('discount_value', 8, 2);
            $table->string('valid_from');
            $table->string('valid_until');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
