<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotteryMethodsValidationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_methods_validations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('method_id', 16)->nullable()->comment('玩法标识');
			$table->string('regex', 64)->nullable()->comment('正则表达式');
			$table->integer('total')->nullable();
			$table->integer('min_block')->nullable();
			$table->integer('max_block')->nullable();
			$table->text('sample_min', 65535)->nullable();
			$table->text('sample_max', 65535)->nullable();
			$table->string('explode', 45)->nullable();
			$table->boolean('num_count')->nullable();
			$table->string('spliter', 16)->nullable();
			$table->boolean('type')->nullable()->comment('1.数字   2.字母   3.数字+字母  4.range字段自定义');
			$table->string('range', 64)->nullable();
			$table->string('example')->nullable();
			$table->string('describe')->nullable();
			$table->string('helper')->nullable();
			$table->string('button_id', 32)->nullable();
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
		Schema::drop('lottery_methods_validations');
	}

}
