<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendUsersSpecificInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_users_specific_infos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nickname', 16)->nullable()->comment('昵称');
			$table->string('realname', 16)->nullable()->comment('真实姓名');
			$table->string('mobile', 11)->nullable()->comment('手机');
			$table->string('email', 32)->nullable()->comment('邮箱');
			$table->string('zip_code', 6)->nullable()->comment('邮编');
			$table->string('address', 128)->nullable()->comment('详细地址');
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
		Schema::drop('frontend_users_specific_infos');
	}

}
