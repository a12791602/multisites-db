<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotterySeriesMethodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_series_methods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('series_id_old')->index('series_id');
			$table->string('series_code')->nullable()->comment('系列标识');
			$table->string('name', 30)->nullable()->comment('玩法中文名');
			$table->integer('basic_method_id')->unsigned()->nullable()->comment('lottery_basic_methods表id');
			$table->boolean('offset')->default(0);
			$table->boolean('hidden')->default(0)->index('hidden');
			$table->boolean('open')->default(1)->index('open');
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
		Schema::drop('lottery_series_methods');
	}

}
