<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendLotteryNoticeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_lottery_notice_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lotteries_id',16)->nullable()->comment('彩种标识');
            $table->string('cn_name',32)->nullable()->comment('彩种中文名');
            $table->tinyInteger('status')->default(0)->nullable()->comment('开启状态：0关闭 1开启');
            $table->integer('sort')->nullable()->comment('排序');
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
        Schema::dropIfExists('frontend_lottery_notice_lists');
    }
}
