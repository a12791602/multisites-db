<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendSystemNoticeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_system_notice_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->nullable()->comment('1管理员手动发送的站内信   2审核相关的站内信  3充值提现相关的站内信');
            $table->text('message')->nullable()->comment('消息内容');
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
        Schema::dropIfExists('backend_system_notice_lists');
    }
}
