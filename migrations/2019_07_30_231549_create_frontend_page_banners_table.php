<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendPageBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_page_banners', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 45)->nullable()->comment('标题');
			$table->text('content', 65535)->nullable()->comment('内容');
			$table->string('pic_path', 128)->nullable()->comment('原图');
			$table->string('thumbnail_path', 128)->nullable()->comment('缩略图');
			$table->boolean('type')->nullable()->comment('1内部 2活动');
			$table->string('redirect_url', 128)->nullable()->comment('跳转地址');
			$table->integer('activity_id')->nullable()->comment('活动id （frontend_activity_contents表id）');
			$table->boolean('status')->nullable()->comment('状态 0关闭 1开启');
			$table->dateTime('start_time')->nullable()->comment('开始时间');
			$table->dateTime('end_time')->nullable()->comment('结束时间');
			$table->integer('sort')->unsigned()->nullable()->comment('排序');
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
		Schema::drop('frontend_page_banners');
	}

}
