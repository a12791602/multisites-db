<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUsersAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_users_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('用户id （frontend_users表id）');
            $table->unsignedDecimal('balance',18,4)->default(0.0000)->comment('资金');
            $table->unsignedDecimal('frozen',18,4)->default(0.0000)->comment('冻结资金');
            $table->tinyInteger('status')->default(0)->comment('状态 0关闭 1开启');
            $table->index(['user_id', 'balance'],'user_accounts_user_id_balance_index');
            $table->index(['user_id', 'frozen'],'user_accounts_user_id_frozen_index');
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
        Schema::dropIfExists('frontend_users_accounts');
    }
}
