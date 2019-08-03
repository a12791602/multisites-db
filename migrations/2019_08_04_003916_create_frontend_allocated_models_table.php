<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendAllocatedModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_allocated_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('label', 20)->nullable()->comment('名称');
			$table->string('en_name', 45)->nullable()->comment('英文名');
			$table->integer('pid')->nullable()->comment('父级id');
			$table->boolean('type')->nullable()->comment('1通用 2web 3app');
			$table->string('value', 128)->nullable();
			$table->boolean('show_num')->nullable()->comment('展示数量');
			$table->boolean('status')->nullable()->comment('状态 0关闭 1开启');
			$table->boolean('level')->nullable()->comment('等级');
			$table->boolean('is_homepage_display')->nullable()->comment('是否是首页显示');
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
		Schema::drop('frontend_allocated_models');
	}

}
