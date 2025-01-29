<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->text('fa_name');
            $table->text('en_name');
            $table->integer('priority')->default(1);
            $table->json('color_details')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}