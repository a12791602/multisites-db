<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTransferRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_transfer_records', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('from_parent_id')->comment('发送人parent_id（frontend_users表parent_id）');
			$table->integer('from_user_id')->comment('发送人id（frontend_users表id）');
			$table->string('from_username', 64)->comment('发送人名称（frontend_users表username）');
			$table->integer('to_parent_id')->comment('接收人parent_id（frontend_users表parent_id）');
			$table->integer('to_user_id')->comment('接收人id（frontend_users表id）');
			$table->string('to_username', 64)->comment('接收名称（frontend_users表username）');
			$table->integer('amount')->unsigned()->comment('金额');
			$table->integer('add_time')->comment('时间');
			$table->integer('day')->comment('日期');
			$table->timestamps();
			$table->index(['to_user_id','add_time']);
			$table->index(['from_user_id','to_user_id','add_time']);
			$table->index(['from_user_id','add_time']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_transfer_records');
	}

}
