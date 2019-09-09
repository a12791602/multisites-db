<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUsersAccountsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_users_accounts_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32)->comment('类型名称');
            $table->string('sign',32)->comment('标识');
            $table->tinyInteger('in_out')->default(1)->comment('出入类型 1增加 2减少');
            $table->string('param',45)->nullable()->comment('需要的字段');
            $table->tinyInteger('frozen_type')->default(1);
            $table->tinyInteger('activity_sign')->default(1);
            $table->integer('admin_id')->default(0);
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
        Schema::dropIfExists('frontend_users_accounts_types');
    }
}
