<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotteryMethodsLayoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_methods_layouts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('validation_id');
			$table->string('display_code', 32);
			$table->integer('rule_id')->unsigned()->comment('lottery_methods_number_rules表id');
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
		Schema::drop('lottery_methods_layouts');
	}

}
