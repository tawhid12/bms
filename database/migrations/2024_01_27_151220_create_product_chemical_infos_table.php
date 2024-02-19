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
        Schema::create('product_chemical_infos', function (Blueprint $table) {
            $table->id();
            $table->string('acids')->nullable();
            $table->string('alkalis')->nullable();
            $table->string('oil_gas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_chemical_infos');
    }
};
