<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotteryMethodsWaysLevelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_methods_ways_levels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('method_id', 16)->nullable()->comment('玩法标识');
			$table->boolean('level')->nullable()->comment('等级');
			$table->integer('basic_method_id')->nullable()->comment('lottery_basic_methods表id');
			$table->string('method_name', 16)->nullable()->comment('玩法中文名');
			$table->string('series_id', 16)->nullable()->comment('系列标识');
			$table->string('position', 45)->nullable()->comment('开奖位置');
			$table->integer('count')->nullable();
			$table->decimal('prize', 10)->nullable()->comment('奖金');
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
		Schema::drop('lottery_methods_ways_levels');
	}

}
