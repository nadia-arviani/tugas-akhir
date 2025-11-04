<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('adoption_requests', function (Blueprint $table) {
            if (!Schema::hasColumn('adoption_requests', 'pet_id')) {
                $table->foreignId('pet_id')
                      ->after('owner_id')
                      ->constrained('adoption_pets')
                      ->onDelete('cascade');
            }
        });
    }

    public function down(): void
    {
        Schema::table('adoption_requests', function (Blueprint $table) {
            $table->dropForeign(['pet_id']);
            $table->dropColumn('pet_id');
        });
    }
};
