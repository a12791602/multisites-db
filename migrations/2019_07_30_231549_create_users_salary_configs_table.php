<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersSalaryConfigsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_salary_configs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sign')->comment('(frontend_users表sign)');
			$table->integer('top_id')->comment('(frontend_users表top_id)');
			$table->integer('parent_id')->comment('(frontend_users表parent_id)');
			$table->integer('user_id')->comment('用户id (frontend_users表id)');
			$table->string('parent_username', 64)->comment('父级用户名 (frontend_users表id)');
			$table->string('username', 64)->comment('用户名 (frontend_users表username)');
			$table->boolean('user_type')->default(1);
			$table->text('contract', 65535);
			$table->boolean('status')->default(1);
			$table->timestamps();
			$table->index(['sign','user_id'], 'user_salary_config_sign_user_id_index');
			$table->index(['top_id','parent_id','user_id'], 'user_salary_config_top_id_parent_id_user_id_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_salary_configs');
	}

}
