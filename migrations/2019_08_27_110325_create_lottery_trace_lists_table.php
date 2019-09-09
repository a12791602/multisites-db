<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades;

class CreateLotteryTraceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_trace_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('top_id');
            $table->integer('parent_id');
            $table->string('rid',256);
            $table->integer('trace_id')->nullable();
            $table->integer('order_queue')->nullable();
            $table->string('series_id',32)->comment('彩种系列标识');
            $table->integer('project_id')->nullable();
            $table->string('project_serial_number',64)->nullable()->comment('投注单号');
            $table->string('issue',32)->comment('奖期号');
            $table->string('username',64)->comment('用户名');
            $table->tinyInteger('is_tester')->default(0);
            $table->string('lottery_sign',32)->comment('彩种标识');
            $table->string('method_sign',32)->comment('玩法标识');
            $table->string('method_group',32)->comment('玩法组');
            $table->string('method_name',32)->comment('玩法中文名');
            $table->longText('bet_number')->comment('下注号码');
            $table->integer('times')->default(1)->comment('倍数');
            $table->decimal('single_price',15,4)->comment('单注金额');
            $table->decimal('total_price',15,4)->comment('总下注金额');
            $table->decimal('mode',15,4)->default(1.0000)->comment('模式 （元：1.0000   角：0.1000   分0.0100）');
            $table->integer('user_prize_group')->comment('用户奖金组');
            $table->integer('bet_prize_group')->comment('彩票奖金组');
            $table->string('prize_set',1024)->nullable()->comment('奖金设置');
            $table->char('ip',15)->comment('ip');
            $table->string('proxy_ip',20);
            $table->tinyInteger('bet_from')->default(1);
            $table->tinyInteger('status')->default(0)->comment('0 等待追号 1正在追号  2追号完成   3玩家撤销  4管理员撤销  5系统撤销  6中奖停止');
            $table->tinyInteger('finished_status')->default(0);
            $table->timestamp('cancel_time')->default(Facades\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('lottery_trace_lists');
    }
}
