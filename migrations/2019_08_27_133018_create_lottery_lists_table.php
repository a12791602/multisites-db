<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lottery_type')->nullable();
            $table->string('cn_name',32)->comment('彩票中文名');
            $table->string('en_name',32)->comment('彩票英文名');
            $table->string('series_id',32)->comment('彩票系列 （lottery_series表id）');
            $table->tinyInteger('is_fast')->default(1)->comment('是否是快彩');
            $table->tinyInteger('auto_open')->default(0);
            $table->integer('max_trace_number')->default(50);
            $table->integer('day_issue')->comment('一天的期数');
            $table->string('issue_format',32);
            $table->string('issue_type',32)->default('day');
            $table->string('valid_code',256)->comment('合法号码');
            $table->integer('code_length')->comment('号码长度');
            $table->string('positions',256)->comment('号码位置');
            $table->integer('min_prize_group')->comment('最小奖金组');
            $table->integer('max_prize_group')->comment('最大奖金组');
            $table->integer('min_times');
            $table->integer('max_times');
            $table->decimal('max_profit_bonus',15,4)->nullable();
            $table->string('valid_modes',32);
            $table->tinyInteger('status')->default(0)->comment('状态 0关闭 1开启');
            $table->string('icon_path',128)->nullable();
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
        Schema::dropIfExists('lottery_lists');
    }
}
