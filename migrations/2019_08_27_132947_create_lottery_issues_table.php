<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lottery_id',32)->comment('彩种标识');
            $table->string('lottery_name',32)->comment('彩种中文名');
            $table->string('issue',64)->nullable()->comment('奖期号');
            $table->integer('issue_rule_id')->comment('奖期规则id （lottery_issue_rules）');
            $table->integer('begin_time')->comment('奖期开始时间');
            $table->integer('end_time')->comment('奖期结束时间');
            $table->integer('official_open_time')->comment('官方开奖时间');
            $table->integer('allow_encode_time')->default(0)->comment('录号时间');
            $table->string('official_code',64)->nullable()->comment('开奖号码');
            $table->unsignedTinyInteger('status_encode')->default(0)->comment('录号状态 （0未录号 1已录号）');
            $table->unsignedTinyInteger('status_calculated')->default(0);
            $table->unsignedTinyInteger('status_prize')->default(0);
            $table->unsignedTinyInteger('status_commission')->default(0);
            $table->unsignedTinyInteger('status_trace')->default(0);
            $table->integer('encode_time')->default(0);
            $table->integer('calculated_time')->default(0);
            $table->integer('prize_time')->default(0);
            $table->integer('commission_time')->default(0);
            $table->integer('trace_time')->default(0);
            $table->integer('encode_id')->nullable();
            $table->string('encode_name',64)->nullable();
            $table->integer('day')->default(0);
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
        Schema::dropIfExists('lottery_issues');
    }
}
