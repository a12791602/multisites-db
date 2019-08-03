<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendUsersPrivacyFlowsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_users_privacy_flows', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('admin_id')->nullable()->comment('管理员id （backend_admin_users表id）');
			$table->string('admin_name', 64)->nullable()->comment('管理员名称 （backend_admin_users表name）');
			$table->integer('user_id')->nullable()->comment('用户id （frontend_users表id）');
			$table->string('username', 64)->nullable()->comment('用户名 （frontend_users表username）');
			$table->text('comment', 65535)->nullable()->comment('内容');
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
		Schema::drop('frontend_users_privacy_flows');
	}

}
