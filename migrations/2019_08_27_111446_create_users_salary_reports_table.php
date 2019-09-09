<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSalaryReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_salary_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sign',255);
            $table->integer('top_id');
            $table->integer('parent_id');
            $table->integer('user_id');
            $table->string('parent_username',32);
            $table->string('username',32);
            $table->unsignedInteger('amount')->default(0);
            $table->unsignedInteger('real_amount')->default(0);
            $table->unsignedInteger('bets')->default(0);
            $table->unsignedInteger('lose')->default(0);
            $table->decimal('ratio',5,1)->default(0.0);
            $table->integer('day');
            $table->tinyInteger('status')->default(0);
            $table->integer('add_time')->default(0);
            $table->integer('send_time')->default(0);
            $table->integer('resend_time')->default(0);
            $table->index(['sign', 'user_id'],'user_salary_report_sign_user_id_index');
            $table->index(['top_id', 'user_id', 'day', 'add_time'],'user_salary_report_top_id_user_id_day_add_time_index');
            $table->index('day','user_salary_report_day_index');
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
        Schema::dropIfExists('users_salary_reports');
    }
}
