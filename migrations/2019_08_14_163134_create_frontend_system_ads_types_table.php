<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendSystemAdsTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_system_ads_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 32)->nullable()->comment('名称');
			$table->boolean('type')->nullable()->comment('类型');
			$table->boolean('status')->nullable()->comment('状态 0关闭 1开启');
			$table->timestamps();
			$table->boolean('ext_type')->nullable()->comment('1图片 2视频 3广告');
			$table->integer('l_size')->nullable()->comment('长度');
			$table->integer('w_size')->nullable()->comment('宽度');
			$table->integer('size')->nullable()->comment('大小');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('frontend_system_ads_types');
	}

}
