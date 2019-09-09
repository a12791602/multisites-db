<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryMethodsValidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_methods_validations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('method_id',16)->nullable()->comment('玩法标识');
            $table->string('regex',64)->nullable()->comment('正则表达式');
            $table->integer('total')->nullable();
            $table->integer('min_block')->nullable();
            $table->integer('max_block')->nullable();
            $table->text('sample_min')->nullable();
            $table->text('sample_max')->nullable();
            $table->string('explode',45)->nullable();
            $table->tinyInteger('num_count')->nullable();
            $table->string('spliter',16)->nullable();
            $table->tinyInteger('type')->nullable()->comment('1.数字   2.字母   3.数字+字母  4.range字段自定义');
            $table->string('range',64)->nullable();
            $table->string('example',255)->nullable();
            $table->string('describe',255)->nullable();
            $table->string('helper',255)->nullable();
            $table->string('button_id',32)->nullable();
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
        Schema::dropIfExists('lottery_methods_validations');
    }
}
