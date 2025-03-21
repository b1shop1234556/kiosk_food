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
        Schema::create('customer_vouchers', function (Blueprint $table) {
            $table->id('customer_voucher_id'); // Primary key
            $table->string('customer_id');
            $table->string('voucher_id');
            $table->boolean('used'); 
            $table->date('used_on'); 
            $table->date('valid_from'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_vouchers');
    }
};
