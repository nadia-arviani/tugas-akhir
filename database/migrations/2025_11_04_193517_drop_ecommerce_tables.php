<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Gunakan class BERNAMA, bukan 'return new class'
class DropEcommerceTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('addtocarts');
        Schema::dropIfExists('products');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Boleh dibiarkan kosong
    }
}