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
        Schema::create('mitigations', function (Blueprint $table) {
            $table->id();
            $table->string('slope_name');
            $table->string('slug');
            $table->string('slope_type');

            $table->text('slope_condition');
            $table->text('mitigation_strategy');

            $table->json('mitigation_estimate');
            $table->string('author');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitigations');
    }
};