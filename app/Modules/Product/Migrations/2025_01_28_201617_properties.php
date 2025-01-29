<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->text('fa_name');
            $table->text('en_name');
            $table->boolean('is_searchable')->default(false);
            $table->boolean('is_variable')->default(false);
            $table->integer('priority')->default(1);
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('box_id');
            $table->foreign('type_id')->references('id')->on('property_types');
            $table->foreign('box_id')->references('id')->on('boxes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
}