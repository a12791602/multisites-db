<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserDaysalariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_daysalaries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->boolean('is_tester')->nullable();
			$table->string('username', 20)->nullable();
			$table->integer('parent_id')->nullable();
			$table->string('parent', 20)->nullable();
			$table->string('forefathers', 1024)->nullable();
			$table->string('parent_str', 100)->nullable();
			$table->date('date')->nullable();
			$table->decimal('daysalary', 11)->nullable();
			$table->boolean('status')->nullable()->default(0);
			$table->dateTime('sent_time')->nullable();
			$table->timestamps();
			$table->decimal('turnover', 20, 6)->nullable()->default(0.000000);
			$table->decimal('daysalary_percentage', 4, 1)->nullable()->default(0.0);
			$table->decimal('bet_commission', 20, 6)->nullable()->default(0.000000);
			$table->decimal('commission', 20, 6)->nullable()->default(0.000000);
			$table->decimal('team_bet_commission', 20, 6)->nullable()->default(0.000000);
			$table->decimal('team_commission', 20, 6)->nullable()->default(0.000000);
			$table->decimal('team_turnover', 20, 6)->nullable()->default(0.000000);
			$table->unique(['user_id','date'], 'user_daysalary_user_id_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_daysalaries');
	}

}
