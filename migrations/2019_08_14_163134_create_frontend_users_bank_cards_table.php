<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendUsersBankCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_users_bank_cards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index('user_bank_cards_user_id_index')->comment('用户id （frontend_users表id）');
			$table->integer('parent_id')->comment('（frontend_users表parent_id）');
			$table->integer('top_id')->comment('（frontend_users表top_id）');
			$table->string('rid', 128)->comment('（frontend_users表rid）');
			$table->string('username', 64)->comment('用户名 （frontend_users表username）');
			$table->string('bank_sign', 32)->comment('银行code');
			$table->string('bank_name', 64)->comment('银行');
			$table->string('owner_name', 128)->index('user_bank_cards_owner_name_index')->comment('真实姓名');
			$table->string('card_number', 64)->index('user_bank_cards_card_number_index')->comment('银行卡号');
			$table->string('province_id', 64)->comment('省份');
			$table->string('city_id', 64)->comment('市');
			$table->string('branch', 64);
			$table->boolean('status')->default(0)->comment('状态 0不可以 1可用');
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
		Schema::drop('frontend_users_bank_cards');
	}

}
