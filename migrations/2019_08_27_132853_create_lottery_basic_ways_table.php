<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryBasicWaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_basic_ways', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('lottery_type')->default(1);
            $table->string('name',10);
            $table->string('function',64)->charset('latin1')->collation('latin1_swedish_ci');
            $table->string('description',255)->nullable();
            $table->unsignedInteger('sequence')->nullable();
            $table->unique(['lottery_type', 'name'],'type_name');
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
        Schema::dropIfExists('lottery_basic_ways');
    }
}
