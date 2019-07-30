<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotteryBasicMethodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_basic_methods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('lottery_type');
			$table->boolean('series_id')->nullable();
			$table->string('series_code', 20)->nullable();
			$table->integer('type')->unsigned()->nullable()->index('type');
			$table->string('name', 20);
			$table->string('wn_function', 64)->nullable();
			$table->boolean('sequencing')->comment('定位');
			$table->boolean('digital_count');
			$table->boolean('unique_count')->nullable()->comment('去重后的数字个数');
			$table->boolean('max_repeat_time')->nullable()->comment('重号的最大重复次数');
			$table->boolean('min_repeat_time')->nullable();
			$table->boolean('span')->nullable();
			$table->boolean('min_span')->nullable();
			$table->boolean('choose_count')->nullable()->comment('计算组合时需要选择的数字个数');
			$table->boolean('special_count')->nullable();
			$table->boolean('fixed_number')->nullable()->comment('固定号码');
			$table->smallInteger('price')->unsigned()->default(2);
			$table->boolean('buy_length')->default(3);
			$table->boolean('wn_length')->default(3);
			$table->boolean('wn_count');
			$table->string('valid_nums', 50)->default('');
			$table->string('rule', 50)->default('');
			$table->integer('all_count')->unsigned()->default(0);
			$table->string('bet_rule', 1024)->nullable();
			$table->string('bonus_note', 1024)->nullable();
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
		Schema::drop('lottery_basic_methods');
	}

}
