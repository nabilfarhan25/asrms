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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('slug'); // "sp-00v"
            $table->string('date_of_occurrence')->nullable(); // Nullable
            $table->string('time_of_occurrence')->nullable(); // Nullable
            $table->string('type_of_failure')->nullable(); // Nullable
            $table->decimal('length_of_slope_failure', 8, 2)->nullable(); // Nullable
            $table->decimal('height_of_slope_failure', 8, 2)->nullable(); // Nullable
            $table->decimal('volume_of_fallen_debris_rocks', 8, 2)->nullable(); // Nullable
            $table->string('type_of_damage')->nullable(); // Nullable
            $table->integer('death_or_injury')->nullable(); // Nullable
            $table->string('scope_of_operation')->nullable(); // Nullable
            $table->string('traffic_blockade')->nullable(); // Nullable
            $table->string('traffic_blockade_duration')->nullable(); // Nullable
            $table->decimal('rainfall_24_hours', 8, 2)->nullable(); // Nullable
            $table->string('rainfall_date')->nullable(); // Nullable
            $table->decimal('maximum_hourly_rainfall', 8, 2)->nullable(); // Nullable
            $table->string('maximum_rainfall_date')->nullable(); // Nullable
            $table->string('maximum_rainfall_time')->nullable(); // Nullable
            $table->decimal('total_rainfall_proceeding_3_days', 8, 2)->nullable(); // Nullable
            $table->string('rainfall_date_from')->nullable(); // Nullable
            $table->string('rainfall_date_to')->nullable(); // Nullable
            $table->string('data_source')->nullable(); // Nullable
            $table->string('pavement_cracks')->nullable(); // Nullable
            $table->string('cause_of_cracks')->nullable(); // Nullable
            $table->string('cracks_sealed')->nullable(); // Nullable
            $table->string('pavement_depression')->nullable(); // Nullable
            $table->string('shoulder_cracks')->nullable(); // Nullable
            $table->string('shoulder_depression')->nullable(); // Nullable
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};