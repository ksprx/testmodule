<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PropertyTypesTable extends Migration
{
    public function up()
    {
        Schema::create('property_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->text('fa_name');
            $table->text('en_name');
            $table->bigInteger('type');
            $table->boolean('is_searchable')->default(false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_types');
    }
}