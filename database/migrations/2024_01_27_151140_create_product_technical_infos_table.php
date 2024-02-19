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
        Schema::create('product_technical_infos', function (Blueprint $table) {
            $table->id();
            $table->string('material')->nullable();
            $table->string('length')->nullable();
            $table->string('strength')->nullable();
            $table->string('specific_gravity')->nullable();
            $table->string('sinks')->nullable();
            $table->string('water_absorption')->nullable();
            $table->string('absorption_resistance')->nullable();
            $table->string('melting_point')->nullable();
            $table->string('friction_point')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_technical_infos');
    }
};
