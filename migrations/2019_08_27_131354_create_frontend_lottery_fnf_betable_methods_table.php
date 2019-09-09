<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendLotteryFnfBetableMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_lottery_fnf_betable_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('series_id',32)->comment('彩种系列');
            $table->string('lottery_name',32)->comment('彩种中文名称');
            $table->string('lottery_id',32)->comment('彩种标识');
            $table->string('method_id',32)->comment('玩法标识');
            $table->string('method_name',32)->comment('玩法中文名称');
            $table->string('method_group',32)->comment('玩法组标识');
            $table->string('method_row',32)->nullable()->comment('玩法行');
            $table->integer('group_sort')->default(0);
            $table->integer('row_sort')->default(0);
            $table->integer('method_sort')->default(0);
            $table->tinyInteger('show')->default(1)->comment('是否展示 0否 1是');
            $table->tinyInteger('status')->default(0)->comment('状态 0关闭 1开启');
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('frontend_lottery_fnf_betable_methods');
    }
}
