<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUserDividendReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_user_dividend_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sign',255);
            $table->integer('top_id');
            $table->integer('from_id');
            $table->integer('user_id');
            $table->text('contract')->nullable();
            $table->integer('did')->default(0);
            $table->tinyInteger('instead')->default(0);
            $table->string('flag',20)->default('');
            $table->dateTime('from_time');
            $table->dateTime('to_time');
            $table->string('username',32);
            $table->decimal('amount',15,4)->default(0.0000);
            $table->decimal('real_amount',15,4)->default(0.0000);
            $table->decimal('bets',15,4)->default(0.0000);
            $table->decimal('bonus',15,4)->default(0.0000);
            $table->decimal('points',15,4)->default(0.0000);
            $table->decimal('brokerage',15,4)->default(0.0000);
            $table->decimal('gift',15,4)->default(0.0000);
            $table->decimal('salary',15,4)->default(0.0000);
            $table->decimal('profit',15,4)->default(0.0000);
            $table->integer('rate')->default(0);
            $table->integer('process_time')->default(0);
            $table->integer('verify_time')->default(0);
            $table->tinyInteger('speed')->default(0);
            $table->index('sign','user_dividend_report_sign_index');
            $table->index(['user_id', 'verify_time'],'user_dividend_report_user_id_verify_time_index');
            $table->index(['from_id', 'verify_time'],'user_dividend_report_from_id_verify_time_index');
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
        Schema::dropIfExists('frontend_user_dividend_reports');
    }
}
