<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryBasicMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_basic_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('lottery_type');
            $table->unsignedTinyInteger('series_id')->nullable();
            $table->string('series_code',20)->nullable();
            $table->unsignedInteger('type')->nullable();
            $table->string('name',20);
            $table->string('wn_function',64)->nullable();
            $table->tinyInteger('sequencing')->comment('定位');
            $table->unsignedTinyInteger('digital_count');
            $table->tinyInteger('unique_count')->nullable()->comment('去重后的数字个数');
            $table->tinyInteger('max_repeat_time')->nullable()->comment('重号的最大重复次数');
            $table->tinyInteger('min_repeat_time')->nullable();
            $table->unsignedTinyInteger('span')->nullable();
            $table->unsignedTinyInteger('min_span')->nullable();
            $table->unsignedTinyInteger('choose_count')->nullable()->comment('计算组合时需要选择的数字个数');
            $table->unsignedTinyInteger('special_count')->nullable();
            $table->tinyInteger('fixed_number')->nullable()->comment('固定号码');
            $table->unsignedSmallInteger('price')->default(2);
            $table->unsignedTinyInteger('buy_length')->default(3);
            $table->unsignedTinyInteger('wn_length')->default(3);
            $table->unsignedTinyInteger('wn_count');
            $table->string('valid_nums',50)->default('');
            $table->string('rule',50)->default('');
            $table->unsignedInteger('all_count')->default(0);
            $table->string('bet_rule',1024)->nullable();
            $table->string('bonus_note',1024)->nullable();
            $table->index('type','type');
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
        Schema::dropIfExists('lottery_basic_methods');
    }
}
