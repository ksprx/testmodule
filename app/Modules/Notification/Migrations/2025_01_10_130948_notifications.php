<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Builder;

class Notifications extends Migration
{
    protected Builder $schema;

    public function __construct()
    {
        $this->schema = Capsule::connection()->getSchemaBuilder();
    }

    public function up()
    {
        $this->schema->create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('channel_id');
            $table->text('message')->nullable(); // متن پیام
            $table->string('message_type', 50)->default('text'); // نوع پیام (text, image, file, etc.)
            $table->jsonb('attachments')->nullable(); // لیست فایل‌های پیوست شده
            $table->string('status', 50)->default('pending'); // وضعیت پیام (pending, sent, failed)
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('no action');


            $table->foreign('channel_id')
                ->references('id')
                ->on('notification_channels')
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
    }

    public function down()
    {
        $this->schema->dropIfExists('notifications');
    }
}