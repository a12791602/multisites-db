<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotterySeriesWaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_series_ways', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('lottery_type')->nullable()->comment('类型（1.开奖号码可重复 2.开奖号码不可重复）');
            $table->unsignedTinyInteger('series_id_old');
            $table->integer('series_id')->nullable()->comment('彩种系列id');
            $table->string('series_code',20)->nullable()->comment('彩种系列标识');
            $table->string('lottery_method_id',10)->nullable()->comment('玩法标识');
            $table->string('name',30)->comment('玩法中文名');
            $table->string('short_name',30)->nullable()->default('');
            $table->unsignedInteger('series_way_method_id')->nullable();
            $table->unsignedTinyInteger('basic_way_id');
            $table->string('basic_methods',200);
            $table->string('series_methods',200);
            $table->unsignedTinyInteger('digital_count')->nullable();
            $table->unsignedSmallInteger('price');
            $table->string('offset',30)->nullable();
            $table->unsignedTinyInteger('buy_length')->nullable();
            $table->unsignedTinyInteger('wn_length')->nullable();
            $table->unsignedTinyInteger('wn_count')->nullable();
            $table->tinyInteger('area_count')->nullable();
            $table->string('area_config',20)->nullable();
            $table->string('area_position',10)->nullable();
            $table->string('valid_nums',50)->nullable();
            $table->string('rule',50)->nullable();
            $table->string('all_count',100);
            $table->string('bonus_note',1024)->nullable();
            $table->string('bet_note',1024)->nullable();
            $table->tinyInteger('is_enable_extra')->default(0);
            $table->unique(['series_way_method_id', 'basic_way_id', 'series_methods', 'offset', 'area_position'],'way_method');
            $table->index('series_id_old','series_id');
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
        Schema::dropIfExists('lottery_series_ways');
    }
}
