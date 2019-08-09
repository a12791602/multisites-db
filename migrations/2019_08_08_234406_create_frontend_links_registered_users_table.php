<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendLinksRegisteredUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_links_registered_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('register_link_id')->unsigned()->nullable()->index('create_user_link_user_create_user_link_id_index')->comment('注册链接id（frontend_users_registerable_links表id）');
			$table->integer('user_id')->unsigned()->index('create_user_link_user_user_id_index')->comment('用户id （backend_admin_users表id）');
			$table->string('url')->comment('url内容');
			$table->string('username', 16)->comment('用户名 （backend_admin_users表username）');
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
		Schema::drop('frontend_links_registered_users');
	}

}