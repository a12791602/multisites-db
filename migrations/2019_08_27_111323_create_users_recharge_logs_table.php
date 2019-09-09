<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRechargeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_recharge_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_order_num',45)->nullable()->comment('订单号');
            $table->string('log_num',45)->nullable()->comment('（backend_system_logs表log_uuid）');
            $table->decimal('real_amount',10,3)->nullable()->comment('实际支付金额');
            $table->tinyInteger('deposit_mode')->nullable()->comment('1人工充值 0 自动');
            $table->tinyInteger('req_type')->nullable();
            $table->string('req_type_1_params',255)->nullable();
            $table->string('req_type_2_params',255)->nullable();
            $table->string('user_recharge_logcol2',255)->nullable();
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
        Schema::dropIfExists('users_recharge_logs');
    }
}
