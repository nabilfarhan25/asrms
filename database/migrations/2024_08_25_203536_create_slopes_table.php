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
        Schema::create('slopes', function (Blueprint $table) {
            $table->id();
            $table->string('slope_name');
            $table->string('slug')->unique();;
            $table->string('location');
            $table->string('sta1');
            $table->string('sta2');
            $table->string('latitude')->nullable();
            $table->string('longtitude')->nullable();
            $table->string('gps1')->nullable();
            $table->string('gps2')->nullable();
            $table->string('side_of_road');
            $table->string('slope_type');
            $table->json('geometry')->nullable();
            $table->json('characteristic')->nullable();
            $table->json('rating')->nullable();
            $table->json('ranking')->nullable();
            $table->timestamp('engineer_inspection')->nullable();
            $table->timestamp('maintenance_inspection')->nullable();

            $table->json('img')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slopes');
    }
};