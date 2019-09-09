<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersWithdrawLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_withdraw_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ip',15)->default('');
            $table->string('order_id',64)->default('');
            $table->unsignedInteger('amount')->default(0);
            $table->integer('user_id')->default(0);
            $table->string('username',32)->default('');
            $table->text('request_params');
            $table->mediumText('request_back');
            $table->text('content');
            $table->string('request_reason',128)->default('');
            $table->tinyInteger('request_status')->default(0);
            $table->string('back_reason',128)->default('');
            $table->tinyInteger('back_status')->default(0);
            $table->index('order_id','user_withdraw_log_order_id_index');
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
        Schema::dropIfExists('users_withdraw_logs');
    }
}
