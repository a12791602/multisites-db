<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryMethodsStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_methods_standards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('series_id',32)->comment('系列标识');
            $table->string('lottery_name',32)->comment('彩种中文名');
            $table->string('lottery_id',32)->comment('彩种标识');
            $table->string('method_id',32)->comment('玩法标识');
            $table->string('method_name',32)->comment('玩法中文名');
            $table->string('method_group',32)->comment('玩法组');
            $table->string('method_row',32)->nullable()->comment('玩法行');
            $table->integer('group_sort')->default(0);
            $table->integer('row_sort')->default(0);
            $table->integer('method_sort')->default(0);
            $table->tinyInteger('show')->default(1)->comment('展示状态 （0不显示 1显示）');
            $table->tinyInteger('status')->default(0)->comment('开启状态 （0关闭 1开启）');
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('lottery_methods_standards');
    }
}
