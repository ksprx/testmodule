<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

class CreateFailedLoginAttemptsTable extends Migration
{
    protected Builder $schema;

    public function __construct()
    {
        $this->schema = Capsule::connection()->getSchemaBuilder();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('failed_login_attempts', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address')->nullable();
            $table->foreignId('user_id')->references('id')
                ->on('users')->cascadeOnDelete();
            $table->timestamp('attempted_at')->default(\Carbon\Carbon::now());
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
        $this->schema->dropIfExists('failed_login_attempts');
    }
}
