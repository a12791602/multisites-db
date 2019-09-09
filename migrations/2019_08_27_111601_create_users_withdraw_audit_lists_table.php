<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersWithdrawAuditListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_withdraw_audit_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('top_id')->comment('（frontend_users表top_id）');
            $table->integer('parent_id')->comment('（frontend_users表parent_id）');
            $table->integer('user_id')->comment('用户id（frontend_users表id）');
            $table->string('username',64)->comment('用户名 （frontend_users表username）');
            $table->string('rid',256)->comment('（frontend_users表rid）');
            $table->integer('withdraw_id')->default(0);
            $table->integer('admin_id')->comment('管理员id （backend_admin_users表id）');
            $table->string('admin_name',64)->comment('管理员名称 （backend_admin_users表name）');
            $table->tinyInteger('status')->default(0)->comment('状态');
            $table->string('reason',64)->default('');
            $table->integer('checked_time')->default(0)->comment('审查时间');
            $table->index(['top_id', 'user_id', 'status'],'user_withdraw_check_top_id_user_id_status_index');
            $table->index('rid','user_withdraw_check_rid_index');
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
        Schema::dropIfExists('users_withdraw_audit_lists');
    }
}
