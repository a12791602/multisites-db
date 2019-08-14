<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSystemAddressIpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_address_ips', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ip', 16)->nullable();
			$table->string('country', 64)->nullable()->comment('国家');
			$table->string('region', 64)->nullable()->comment('省份');
			$table->string('city', 64)->nullable()->comment('城市');
			$table->string('county', 64)->nullable()->comment('县');
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
		Schema::drop('system_address_ips');
	}

}
