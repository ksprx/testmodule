<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

class UserProfile extends Migration
{
    protected Builder $schema;

    public function __construct()
    {
        $this->schema = Capsule::connection()->getSchemaBuilder();
    }

    public function up()
    {
        $this->schema->create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->date('birth_date')->nullable();
            $table->string('alternative_phone_number', 15)->nullable();
            $table->string('landline_phone', 15)->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->text('address')->nullable();
            $table->string('profile_image', 255)->nullable();
            $table->string('national_code', 10)->unique()->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->dropIfExists('user_profiles');
    }
}