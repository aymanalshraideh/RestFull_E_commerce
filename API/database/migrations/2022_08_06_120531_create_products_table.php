<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name_en');
            $table->string('product_name_ar');

            $table->foreignId('subcategorie_id')
            ->constrained('subcategories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('categorie_id')
            ->constrained('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('product_quantity');
            $table->string('product_price');
            $table->string('product_rate');
            $table->string('product_main_image');
            $table->string('product_image1')->nullable();
            $table->string('product_image2')->nullable();
            $table->string('product_image3')->nullable();


            $table->longText('product_description_en');
            $table->longText('product_description_ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
