<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotterySeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('series_name',45)->nullable();
            $table->string('title',45)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('price_difference')->nullable()->default(0);
            $table->string('encode_splitter',15)->nullable();
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
        Schema::dropIfExists('lottery_series');
    }
}
