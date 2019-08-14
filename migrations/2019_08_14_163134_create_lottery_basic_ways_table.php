<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotteryBasicWaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_basic_ways', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->boolean('lottery_type')->default(1);
			$table->string('name', 10);
			$table->string('function', 64);
			$table->string('description')->nullable();
			$table->integer('sequence')->unsigned()->nullable();
			$table->timestamps();
			$table->unique(['lottery_type','name'], 'type_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lottery_basic_ways');
	}

}
