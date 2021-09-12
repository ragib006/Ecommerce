<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTb1SliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_slider', function (Blueprint $table) {
            $table->increments('slider_id');
            $table->string('slider_name');
            $table->string('slider_title');
            $table->string('slider_subtitle');

            $table->string('slider_image');
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
        Schema::dropIfExists('tb1_slider');
    }
}
