<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryPrizeGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_prize_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('series_id_old');
            $table->string('series_code',255)->nullable();
            $table->unsignedTinyInteger('type');
            $table->string('name',20);
            $table->unsignedMediumInteger('classic_prize');
            $table->unsignedDecimal('water',4,4);
            $table->unique(['series_code', 'name'],'series_name');
            $table->index('series_id_old','series_id');
            $table->index('type','type');
            $table->index('classic_prize','idx_classic_prize');
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
        Schema::dropIfExists('lottery_prize_groups');
    }
}
