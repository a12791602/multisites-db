<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendUsersHelpCentersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_users_help_centers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pid')->comment('上级id');
			$table->string('menu', 32)->comment('标题');
			$table->text('content', 65535)->nullable()->comment('内容');
			$table->boolean('status')->default(0)->comment('开启状态 0关闭 1开启');
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
		Schema::drop('frontend_users_help_centers');
	}

}
