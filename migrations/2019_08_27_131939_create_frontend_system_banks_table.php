<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendSystemBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_system_banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',45)->nullable()->comment('标题');
            $table->string('code',45)->nullable()->comment('code');
            $table->tinyInteger('pay_type')->nullable()->comment('1银行卡 2微信 3支付宝 之类');
            $table->tinyInteger('status')->nullable()->comment('状态 0关闭 1开启');
            $table->decimal('min_recharge',10,2)->nullable()->comment('最小充值金额');
            $table->decimal('max_recharge',10,2)->nullable()->comment('最大充值金额');
            $table->decimal('min_withdraw',10,2)->nullable()->comment('最小提现金额');
            $table->decimal('max_withdraw',10,2)->nullable()->comment('最大提现金额');
            $table->string('remarks',128)->nullable()->comment('描述');
            $table->string('allow_user_level',45)->nullable()->comment('用户层级 1-10');
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
        Schema::dropIfExists('frontend_system_banks');
    }
}
