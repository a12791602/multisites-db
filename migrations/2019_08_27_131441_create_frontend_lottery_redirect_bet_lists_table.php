<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendLotteryRedirectBetListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_lottery_redirect_bet_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lotteries_id')->nullable()->comment('彩票id （lottery_lists表id）');
            $table->string('lotteries_sign',16)->nullable()->comment('彩种标识');
            $table->string('pic_path',128)->nullable()->comment('图片');
            $table->unsignedInteger('sort')->nullable()->comment('排序');
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
        Schema::dropIfExists('frontend_lottery_redirect_bet_lists');
    }
}
