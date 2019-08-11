<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBackendAdminUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('backend_admin_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 64)->comment('管理员名称');
			$table->string('email')->comment('邮箱');
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password')->comment('密码');
			$table->text('remember_token', 65535)->nullable()->comment('token');
			$table->boolean('is_test')->nullable()->default(0)->comment('是否测试号   0不是 1是');
			$table->integer('group_id')->nullable()->index('backend_admin_users_group_id_fk_idx')->comment('管理员组id');
			$table->integer('status')->unsigned()->nullable()->default(1)->comment('状态 0关闭 1开启');
			$table->integer('platform_id')->unsigned()->nullable()->comment('平台id');
			$table->integer('super_id')->unsigned()->nullable()->index('backend_admin_users_super_id_foreign');
			$table->timestamps();
			$table->index(['platform_id','status'], 'fk_platform_id_status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('backend_admin_users');
	}

}
