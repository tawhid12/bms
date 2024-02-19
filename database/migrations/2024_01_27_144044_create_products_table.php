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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_title')->nullable();
            $table->string('product_des')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('related_product_id')->nullable();
            $table->string('upload_pdf')->nullable();
            $table->string('dia_mm')->nullable();
            $table->string('dia_inch')->nullable();
            $table->string('cirm_inch')->nullable();
            $table->string('mt')->nullable();
            $table->integer('is_featured')->nullable();
            $table->string('brand')->nullable();
            $table->string('certification')->nullable();
            $table->string('manufactured_by')->nullable();
            $table->string('capacity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
