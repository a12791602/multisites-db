<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotterySeriesMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_series_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('series_id_old');
            $table->string('series_code',255)->nullable()->comment('系列标识');
            $table->string('name',30)->nullable()->comment('玩法中文名');
            $table->unsignedMediumInteger('basic_method_id')->nullable()->comment('lottery_basic_methods表id');
            $table->tinyInteger('offset')->default(0);
            $table->tinyInteger('hidden')->default(0);
            $table->tinyInteger('open')->default(1);
            $table->index('series_id_old','series_id');
            $table->index('hidden','hidden');
            $table->index('open','open');
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
        Schema::dropIfExists('lottery_series_methods');
    }
}
