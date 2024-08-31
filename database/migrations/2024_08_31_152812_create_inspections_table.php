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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->string('slope_name');
            $table->string('slug');
            $table->string('slope_type');

            $table->date('date_of_inspection');
            $table->date('weather_condition');

            $table->json('geometry')->nullable();
            $table->json('characteristic')->nullable();
            $table->json('rating')->nullable();
            $table->json('ranking')->nullable();

            $table->json('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};