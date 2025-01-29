<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Builder;

class NotificationChannelTypes extends Migration
{
    protected Builder $schema;

    public function __construct()
    {
        $this->schema = Capsule::connection()->getSchemaBuilder();
    }

    public function up()
    {
        $this->schema->create('notification_channel_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->string('fa_name', 50)->unique();
            $table->boolean('active',)->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->dropIfExists('channel_types');
    }
}
