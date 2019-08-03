<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendInfoCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_info_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 45)->nullable()->comment('标题');
			$table->integer('parent')->nullable()->comment('父级id');
			$table->string('template', 45)->nullable()->comment('模板');
			$table->integer('platform_id')->nullable()->comment('平台id （system_platforms表id）');
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
		Schema::drop('frontend_info_categories');
	}

}
