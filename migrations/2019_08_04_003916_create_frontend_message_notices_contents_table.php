<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendMessageNoticesContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_message_notices_contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('operate_admin_id')->nullable()->comment('发送信息的管理员id');
			$table->string('operate_admin_name', 32)->nullable()->comment('发送信息的管理员name');
			$table->boolean('type')->nullable()->comment('1公告 2站内信');
			$table->string('title', 45)->nullable()->comment('标题');
			$table->text('content', 65535)->nullable()->comment('内容');
			$table->dateTime('start_time')->nullable()->comment('开始时间');
			$table->dateTime('end_time')->nullable()->comment('结束时间');
			$table->text('pic_path', 65535)->nullable();
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
		Schema::drop('frontend_message_notices_contents');
	}

}
