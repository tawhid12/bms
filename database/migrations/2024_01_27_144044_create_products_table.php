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
            $table->string('title');
            $table->string('slug')->unique()->index()->nullable();
            $table->foreignId('category_id')->constrained('categories');
            //$table->foreignId('sub_category_id')->constrained('sub_categories');
            $table->string('featured_image')->comment('product-page');
            $table->tinyInteger('is_featured')->default(0);
            $table->longText('tech_spec')->comment('Technical Specification');
            $table->longText('product_des')->nullable();
            $table->longText('che_res')->comment('Chemical Resistance');
            $table->longText('pro_info')->comment('Production information');
            $table->longText('feature')->comment('Feature');
            $table->longText('srbsc')->comment('Sisal Rope Breaking Strength chart');
            $table->string('related_product_id')->nullable();
            $table->foreignId('ebrochure_id')->constrained('ebrochures')->nullable();
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
