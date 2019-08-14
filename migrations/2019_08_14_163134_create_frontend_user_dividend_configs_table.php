<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendUserDividendConfigsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_user_dividend_configs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sign')->index('user_dividend_config_sign_index')->comment('sign （frontend_users表sign）');
			$table->integer('top_id')->comment('上级id （frontend_users表top_id）');
			$table->integer('parent_id')->comment('（frontend_users表parent_id）');
			$table->integer('user_id')->comment('用户id （frontend_users表id）');
			$table->string('username', 20)->comment('用户名 （frontend_users表username）');
			$table->text('contract', 65535)->nullable();
			$table->text('temp', 65535)->nullable();
			$table->boolean('verify')->default(0);
			$table->boolean('status')->default(0)->comment('状态 0关闭 1开启');
			$table->integer('verify_time')->default(0);
			$table->timestamps();
			$table->index(['parent_id','user_id'], 'user_dividend_config_parent_id_user_id_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('frontend_user_dividend_configs');
	}

}
