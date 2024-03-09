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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name')->nullable();
            $table->string('upload_file')->nullable();
            $table->timestamps();
        });
        DB::table('categories')->insert(
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
        Schema::dropIfExists('categories');
    }
};
