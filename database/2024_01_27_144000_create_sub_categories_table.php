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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('sub_cat_name');
            $table->string('slug_name')->unique()->index();
            $table->foreignId('category_id')->constrained('categories');
            $table->string('upload_file')->nullable();
            $table->timestamps();
        });

        DB::table('sub_categories')->insert(
            [
                [
                    'cat_name' => 'Rope',
                ],
                [
                    'cat_name' => 'Twine',
                ],
                [
                    'cat_name' => 'Cloth',
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
