<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUserInvitedRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_user_invited_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('用户id （frontend_users表id）');
            $table->string('username',64)->comment('用户名 （frontend_users表username）');
            $table->string('device_type',16)->default('');
            $table->string('brand',32)->default('');
            $table->integer('invite_code')->default(0);
            $table->char('ip',15)->default('');
            $table->tinyInteger('status')->default(1)->comment('状态 0关闭 1开启');
            $table->index('ip','user_invite_records_ip_index');
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
        Schema::dropIfExists('frontend_user_invited_records');
    }
}
