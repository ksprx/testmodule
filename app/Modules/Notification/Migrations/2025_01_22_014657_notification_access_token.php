<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Builder;

class NotificationAccessToken extends Migration
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
        $this->schema->create('notification_access_token', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('channel_type_id');
            $table->string('token',50)->unique();
            $table->text('channel_value')->nullable();
            $table->timestamps();
            $table->foreign('channel_type_id')
                ->references('id')
                ->on('notification_channel_types')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->dropIfExists('notification_access_token');
    }
}
