<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTb1ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->longText('product_shotr_description');
            $table->longText('product_long_description');
            $table->float('product_price');
            $table->string('product_image');
            $table->string('product_size');
            $table->integer('product_weight');
            $table->string('product_color');
            $table->integer('publication_status')->default('1');




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
        Schema::dropIfExists('tb1_products');
    }
}
