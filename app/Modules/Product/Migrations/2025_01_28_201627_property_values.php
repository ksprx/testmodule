<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PropertyValuesTable extends Migration
{
    public function up()
    {
        Schema::create('property_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('priority')->default(1);
            $table->text('value')->default('');
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('property_id')->references('id')->on('properties');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_values');
    }
}