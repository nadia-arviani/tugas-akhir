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
        Schema::table('adoption_requests', function (Blueprint $table) {
            $table->unsignedBigInteger('shelter_id')->after('pet_id')->nullable();

            // agar foreign key relation banana ho to
            $table->foreign('shelter_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('adoption_requests', function (Blueprint $table) {
            $table->dropForeign(['shelter_id']);
            $table->dropColumn('shelter_id');
        });
    }
};
