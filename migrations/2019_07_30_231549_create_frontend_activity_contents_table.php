<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendActivityContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_activity_contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 45)->nullable();
			$table->text('content', 65535)->nullable()->comment('内容');
			$table->string('pic_path')->nullable()->comment('图片路径');
			$table->string('preview_pic_path')->nullable()->comment('图标路径');
			$table->dateTime('start_time')->nullable()->comment('开始时间');
			$table->dateTime('end_time')->nullable()->comment('结束时间');
			$table->boolean('status')->nullable()->comment('开启状态 0关闭 1开启');
			$table->integer('admin_id')->nullable()->comment('添加活动的管理员id （backend_admin_users表id）');
			$table->string('admin_name', 45)->nullable()->comment('添加活动的管理员name （backend_admin_users表name）');
			$table->boolean('is_redirect')->nullable()->comment('是否跳转 0否 1是');
			$table->string('redirect_url', 128)->nullable()->comment('跳转地址');
			$table->boolean('is_time_interval')->nullable()->comment('是否有期限  0永久 1有限');
			$table->integer('sort')->comment('排序');
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
		Schema::drop('frontend_activity_contents');
	}

}
