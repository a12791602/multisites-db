<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendUsersAccountsTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_users_accounts_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 32)->comment('类型名称');
			$table->string('sign', 32)->comment('标识');
			$table->boolean('in_out')->default(1)->comment('出入类型 1增加 2减少');
			$table->string('param', 45)->nullable()->comment('需要的字段');
			$table->boolean('amount')->default(1);
			$table->boolean('user_id')->default(1);
			$table->boolean('project_id')->default(1);
			$table->boolean('lottery_id')->default(1);
			$table->boolean('method_id')->default(1);
			$table->boolean('issue')->default(1);
			$table->boolean('from_id')->default(1);
			$table->boolean('from_admin_id')->default(1);
			$table->boolean('to_id')->default(1);
			$table->boolean('frozen_type')->default(1);
			$table->boolean('activity_sign')->default(1);
			$table->integer('admin_id')->default(0);
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
		Schema::drop('frontend_users_accounts_types');
	}

}
