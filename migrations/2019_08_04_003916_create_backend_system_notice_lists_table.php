<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBackendSystemNoticeListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('backend_system_notice_lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('type')->nullable()->comment('1管理员手动发送的站内信   2审核相关的站内信  3充值提现相关的站内信');
			$table->text('message', 65535)->nullable()->comment('消息内容');
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
		Schema::drop('backend_system_notice_lists');
	}

}
