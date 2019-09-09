<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUsersBankCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/**
         * @param Blueprint $table
         */
            'frontend_users_bank_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('用户id （frontend_users表id）');
            $table->integer('parent_id')->comment('（frontend_users表parent_id）');
            $table->integer('top_id')->comment('（frontend_users表top_id）');
            $table->string('rid',128)->comment('（frontend_users表rid）');
            $table->string('username',64)->comment('用户名 （frontend_users表username）');
            $table->string('bank_sign',32)->comment('银行code');
            $table->string('bank_name',64)->comment('银行');
            $table->string('owner_name',128)->comment('真实姓名');
            $table->string('card_number',64)->comment('银行卡号');
            $table->string('province_id',64)->comment('省份');
            $table->string('city_id',64)->comment('市');
            $table->string('branch',64);
            $table->tinyInteger('status')->default(0)->comment('状态 0不可以 1可用');
            $table->index('user_id','user_bank_cards_user_id_index');
            $table->index('owner_name','user_bank_cards_owner_name_index');
            $table->index('card_number','user_bank_cards_card_number_index');
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_users_bank_cards');
    }
}
