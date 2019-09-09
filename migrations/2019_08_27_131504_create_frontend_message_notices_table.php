<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendMessageNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_message_notices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('receive_user_id')->comment('接收的用户id');
            $table->integer('notices_content_id')->nullable()->comment('消息表id（frontend_message_notices_contents）');
            $table->tinyInteger('status')->comment('0未读  1已读');
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_message_notices');
    }
}
