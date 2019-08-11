<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserBonusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_bonuses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('period')->nullable();
			$table->integer('user_id')->nullable();
			$table->string('username')->nullable();
			$table->integer('parent_user_id')->nullable();
			$table->boolean('is_tester')->nullable();
			$table->decimal('salary_total', 20, 6)->nullable();
			$table->decimal('dividend_total', 20, 6)->nullable();
			$table->decimal('commission_total', 20, 6)->nullable();
			$table->decimal('prize_total', 20, 6)->nullable();
			$table->decimal('turnover_total', 20, 6)->nullable();
			$table->integer('bet_counts')->nullable();
			$table->boolean('bonus_percentage')->nullable();
			$table->decimal('net_profit_total', 20, 6)->nullable();
			$table->decimal('bonus_total', 20, 6)->nullable()->default(0.000000);
			$table->timestamps();
			$table->unique(['period','user_id'], 'user_bet_counts_id_uindex');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_bonuses');
	}

}
