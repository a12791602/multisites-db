<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryPrizeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_prize_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('series_id_old');
            $table->string('series_code',255)->nullable();
            $table->unsignedInteger('group_id');
            $table->string('group_name',20);
            $table->unsignedMediumInteger('classic_prize');
            $table->unsignedInteger('method_id');
            $table->string('method_name',20)->nullable();
            $table->unsignedTinyInteger('level');
            $table->unsignedDecimal('probability',11,11);
            $table->decimal('old_prize',12,4)->nullable();
            $table->decimal('prize',12,4)->nullable();
            $table->unsignedDecimal('full_prize',12,4);
            $table->index('group_id','group_id');
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
        Schema::dropIfExists('lottery_prize_details');
    }
}
