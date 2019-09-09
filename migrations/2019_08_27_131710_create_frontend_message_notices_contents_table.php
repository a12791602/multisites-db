<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendMessageNoticesContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_message_notices_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('operate_admin_id')->nullable()->comment('发送信息的管理员id');
            $table->string('operate_admin_name',32)->nullable()->comment('发送信息的管理员name');
            $table->tinyInteger('type')->nullable()->comment('1公告 2站内信');
            $table->string('title',45)->nullable()->comment('标题');
            $table->text('content')->nullable()->comment('内容');
            $table->timestamp('start_time')->nullable()->comment('开始时间');
            $table->timestamp('end_time')->nullable()->comment('结束时间');
            $table->text('pic_path')->nullable();
            $table->integer('sort')->nullable();
            $table->string('describe',30)->comment('公告简介');
            $table->unsignedTinyInteger('status')->comment('1显示 0关闭');
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_message_notices_contents');
    }
}
