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
        Schema::table('slopes', function (Blueprint $table) {
            $table->string('y_value')->nullable();
            $table->string('p_value')->nullable();
            $table->string('lhra_score')->nullable();
            $table->string('smart_category')->nullable();
            $table->string('lhra_category')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('slopes', function (Blueprint $table) {
            $table->dropColumn('y_value');
            $table->dropColumn('p_value');
            $table->dropColumn('lhra_score');
            $table->dropColumn('smart_category');
            $table->dropColumn('lhra_category');
        });
    }
};