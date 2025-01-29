<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryRelationshipsTable extends Migration
{
    public function up()
    {
        Schema::create('category_relationships', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('child_id');
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('priority')->default(1);
            $table->string('nick_name', 255)->nullable();
            $table->foreign('parent_id')->references('id')->on('categories');
            $table->foreign('child_id')->references('id')->on('categories');
            $table->primary(['parent_id', 'child_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_relationships');
    }
}