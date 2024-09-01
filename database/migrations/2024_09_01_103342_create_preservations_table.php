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
        Schema::create('preservations', function (Blueprint $table) {
            $table->id();
            $table->string('slope_name');
            $table->string('slug');
            $table->string('slope_type');
            
            $table->string('date_of_landslide');
            $table->string('landslide_type');
            $table->string('type_of_improvement_works');

            $table->json('type');

            $table->json('file');
            $table->text('note');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preservations');
    }
};