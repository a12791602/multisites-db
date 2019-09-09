<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryPrizeLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_prize_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('lottery_type_id');
            $table->unsignedMediumInteger('basic_method_id');
            $table->unsignedTinyInteger('level');
            $table->decimal('probability',11,11);
            $table->unsignedDecimal('full_prize',14,4)->nullable();
            $table->unsignedDecimal('fixed_prize',14,4)->nullable();
            $table->unsignedDecimal('max_prize',10,2);
            $table->unsignedMediumInteger('max_group');
            $table->unsignedDecimal('min_water',4,4)->default(0.0200);
            $table->string('rule',50)->collation('utf8_general_ci');
            $table->unsignedInteger('prize_allcount')->default(0);
            $table->unique(['basic_method_id', 'level'],'method_level');
            $table->index('lottery_type_id','lottery_type_id');
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lottery_prize_levels');
    }
}
