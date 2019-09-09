<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUsersTransferedRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_users_transfered_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sign',32);
            $table->integer('top_id');
            $table->integer('parent_id');
            $table->integer('user_id');
            $table->string('username',64);
            $table->string('rid',256);
            $table->tinyInteger('mode')->default(1);
            $table->tinyInteger('type')->default(1);
            $table->unsignedBigInteger('amount');
            $table->integer('admin_id')->default(0);
            $table->string('admin_name',32)->default('0');
            $table->string('reason',128)->default('');
            $table->string('process_admin_name',32)->default('0');
            $table->string('process_reason',128)->default('');
            $table->integer('add_time');
            $table->integer('process_time')->default(0);
            $table->integer('stat_time')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->index('user_id','user_admin_transfer_records_user_id_index');
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
        Schema::dropIfExists('frontend_users_transfered_records');
    }
}
