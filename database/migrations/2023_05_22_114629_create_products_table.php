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
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->string('name');
            $table->float('height');
            $table->float('width');
            $table->string('base_material')->nullable();
            $table->string('lampshade_material')->nullable();
            $table->string('light_source');
            $table->string('light_source_connectors');
            $table->integer('light_source_quantity')->nullable();
            $table->float('power')->nullable();
            $table->float('price');
            $table->text('description')->nullable();
            $table->string('img_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['subcategory_id']);
        });
        Schema::dropIfExists('products');
    }
};
