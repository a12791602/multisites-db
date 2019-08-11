<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCommissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_commissions', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('project_id')->unsigned()->default(0)->index('prj_bonus_sets_prj_id_index');
			$table->integer('user_id')->unsigned()->default(0);
			$table->string('username', 16);
			$table->string('rid', 1024);
			$table->integer('account_id')->unsigned();
			$table->boolean('is_tester')->nullable();
			$table->string('lottery_sign', 16)->default('0');
			$table->string('issue', 15);
			$table->decimal('bet_amount', 16, 6)->default(0.000000);
			$table->decimal('amount', 16, 6)->default(0.000000);
			$table->boolean('status')->default(0)->index('prj_bonus_sets_gived_index');
			$table->dateTime('sent_at')->nullable();
			$table->timestamps();
			$table->index(['lottery_sign','issue','status'], 'lottery_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_commissions');
	}

}
