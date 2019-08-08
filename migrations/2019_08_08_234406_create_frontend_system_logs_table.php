<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendSystemLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_system_logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('log_uuid', 45)->nullable()->comment('唯一标识id');
			$table->text('description', 65535)->nullable()->comment('描述');
			$table->string('origin', 200)->nullable()->comment('域名');
			$table->enum('type', array('log','store','change','delete'))->comment('类型');
			$table->enum('result', array('success','neutral','failure'))->comment('结果');
			$table->enum('level', array('emergency','alert','critical','error','warning','notice','info','debug'))->comment('等级');
			$table->string('token', 100)->nullable()->comment('token');
			$table->string('ip', 45);
			$table->string('ips', 200)->nullable();
			$table->integer('user_id')->nullable();
			$table->string('session', 100)->nullable();
			$table->string('lang', 50)->nullable();
			$table->string('device', 20)->nullable()->comment('设备');
			$table->string('os', 20)->nullable()->comment('系统');
			$table->string('os_version', 50)->nullable()->comment('系统版本');
			$table->string('browser', 50)->nullable()->comment('浏览器');
			$table->string('bs_version', 50)->nullable();
			$table->boolean('device_type')->nullable();
			$table->string('robot', 50)->nullable();
			$table->string('user_agent', 200)->nullable();
			$table->text('inputs', 65535)->nullable()->comment('传递参数');
			$table->text('route', 65535)->nullable()->comment('路由');
			$table->integer('route_id')->unsigned()->nullable()->comment('路由id');
			$table->integer('admin_id')->nullable();
			$table->string('admin_name', 64)->nullable();
			$table->string('username', 64)->nullable();
			$table->integer('menu_id')->nullable();
			$table->string('menu_label', 64)->nullable();
			$table->text('menu_path', 65535)->nullable();
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
		Schema::drop('frontend_system_logs');
	}

}
