<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryIssueRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_issue_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lottery_id',255)->comment('彩票id （lottery_lists表id）');
            $table->string('lottery_name',255)->comment('彩票名（lottery_lists表cn_name）');
            $table->time('begin_time')->comment('开始时间');
            $table->time('end_time')->comment('结束时间');
            $table->integer('issue_seconds')->comment('奖期间隔时间（秒）');
            $table->time('first_time')->comment('第一期时间');
            $table->smallInteger('adjust_time');
            $table->smallInteger('encode_time');
            $table->smallInteger('issue_count');
            $table->tinyInteger('status')->default(1)->comment('状态 0关闭 1开启');
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
        Schema::dropIfExists('lottery_issue_rules');
    }
}
