<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityBetLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_bet_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id');
            $table->integer('config_id');
            $table->integer('user_id');
            $table->integer('username');
            $table->integer('day');
            $table->integer('level');
            $table->integer('bonus');
            $table->integer('fetched_time');
            $table->integer('current_bets')->default(0);
            $table->integer('current_recharge')->default(0);
            $table->integer('current_lose')->default(0);
            $table->char('ip',15);
            $table->tinyInteger('status')->default(1);
            $table->integer('checked_admin_id');
            $table->integer('checked_time');
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_bet_logs');
    }
}
