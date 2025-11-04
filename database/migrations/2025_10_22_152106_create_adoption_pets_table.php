<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('adoption_pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shelter_id')->constrained('users')->onDelete('cascade');
            $table->string('pet_name');
            $table->string('species')->nullable();
            $table->string('breed')->nullable();
            $table->integer('age')->nullable();
            $table->string('health_status')->nullable();
            $table->enum('status', ['available', 'pending', 'adopted'])->default('available');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adoption_pets');
    }
};
