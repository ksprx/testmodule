<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->text('fa_name');
            $table->text('en_name');
            $table->unsignedBigInteger('category_id');
            $table->text('slug')->unique();
            $table->boolean('is_original')->default(true);
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('brand_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}