<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryMethodsWaysLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_methods_ways_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('method_id',16)->nullable()->comment('玩法标识');
            $table->tinyInteger('level')->nullable()->comment('等级');
            $table->integer('basic_method_id')->nullable()->comment('lottery_basic_methods表id');
            $table->string('method_name',16)->nullable()->comment('玩法中文名');
            $table->string('level_name',32)->nullable();
            $table->string('series_id',16)->nullable()->comment('系列标识');
            $table->string('position',45)->nullable()->comment('开奖位置');
            $table->integer('count')->nullable();
            $table->decimal('prize',10,2)->nullable()->comment('奖金');
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
        Schema::dropIfExists('lottery_methods_ways_levels');
    }
}
