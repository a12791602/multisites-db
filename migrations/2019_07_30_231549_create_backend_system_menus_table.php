<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBackendSystemMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('backend_system_menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('label', 20)->nullable()->comment('名称');
			$table->string('en_name', 50)->nullable()->comment('英文名');
			$table->string('route', 50)->nullable()->default('#')->comment('路由');
			$table->integer('pid')->nullable()->default(0)->comment('菜单的父级别');
			$table->string('icon', 50)->nullable()->comment('图标');
			$table->boolean('display')->nullable()->default(1)->comment('是否显示');
			$table->integer('level')->nullable()->default(1)->comment('等级');
			$table->integer('sort')->nullable()->comment('排序');
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
		Schema::drop('backend_system_menus');
	}

}
