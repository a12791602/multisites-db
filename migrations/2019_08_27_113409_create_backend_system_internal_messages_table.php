<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendSystemInternalMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_system_internal_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('operate_admin_id')->nullable()->comment('发送的管理员id null为系统 （backend_admin_users表id）');
            $table->integer('receive_admin_id')->nullable()->comment('接收的管理员id （（backend_admin_users表id））');
            $table->integer('receive_group_id')->nullable()->comment('接收的管理组id (backend_admin_access_groups表id)');
            $table->integer('message_id')->nullable()->comment('消息内容表id（notice_messages表 id）');
            $table->tinyInteger('status')->nullable()->comment('0未读 1已读');
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
        Schema::dropIfExists('backend_system_internal_messages');
    }
}
