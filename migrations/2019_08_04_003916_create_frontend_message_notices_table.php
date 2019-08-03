<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendMessageNoticesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_message_notices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('receive_user_id')->comment('接收的用户id');
			$table->integer('notices_content_id')->nullable()->comment('消息表id（frontend_message_notices_contents）');
			$table->boolean('status')->comment('0未读  1已读');
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
		Schema::drop('frontend_message_notices');
	}

}
