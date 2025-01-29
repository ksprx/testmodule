<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Builder;

class NotificationChannels extends Migration
{
    protected Builder $schema;

    public function __construct()
    {
        $this->schema = Capsule::connection()->getSchemaBuilder();
    }

    public function up()
    {
        $this->schema->create('notification_channels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('channel_type_id');
            $table->text('channel_value');
            $table->jsonb('metadata')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('channel_type_id')
                ->references('id')
                ->on('notification_channel_types')
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
    }

    public function down()
    {
        $this->schema->dropIfExists('notification_channels');
    }
}