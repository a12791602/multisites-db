<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRechargeHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_recharge_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->comment('用户id（frontend_users表id）');
            $table->string('user_name',45)->nullable()->comment('用户name（frontend_users表username）');
            $table->tinyInteger('is_tester')->nullable()->comment('是否是测试用户（frontend_users表is_tester）');
            $table->integer('top_agent')->nullable()->comment('用户最上级id（frontend_users表top_id）');
            $table->string('channel',16)->nullable();
            $table->integer('payment_id')->nullable()->comment('支付通道id    (frontend_system_banks表id)');
            $table->decimal('amount',10,3)->nullable()->comment('充值金额');
            $table->string('company_order_num',45)->nullable()->comment('订单号');
            $table->string('third_party_order_num',45)->nullable()->comment('第三方订单号');
            $table->tinyInteger('deposit_mode')->nullable()->comment('1人工充值 0 自动');
            $table->decimal('real_amount',10,3)->nullable()->comment('实际支付金额');
            $table->decimal('fee',10,3)->nullable()->comment('手续费');
            $table->integer('audit_flow_id')->nullable()->comment('审核表id（backend_admin_audit_flow_lists表id）');
            $table->tinyInteger('status')->nullable()->comment('0正在充值 1充值成功 2充值失败 10待审核 11审核通过 12 审核拒绝');
            $table->string('client_ip',64)->nullable();
            $table->string('source',16)->nullable()->comment('来源');
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_recharge_histories');
    }
}
