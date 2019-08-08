<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCronJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cron_jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('command', 32)->nullable();
			$table->string('param', 64)->nullable();
			$table->string('schedule', 32)->nullable();
			$table->boolean('status')->nullable();
			$table->string('remarks', 64)->nullable();
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
		Schema::drop('cron_jobs');
	}

}
