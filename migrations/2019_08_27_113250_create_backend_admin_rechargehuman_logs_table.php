<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendAdminRechargehumanLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_admin_rechargehuman_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->nullable()->comment('类型 （0系统操作 1超管对管理员操作 2管理员对用户操作 3超管对用户操作）');
            $table->tinyInteger('in_out')->nullable()->comment('资金类型 （0减少 1增加）');
            $table->integer('super_admin_id')->nullable()->comment('超级管理员id （backend_admin_users表id）');
            $table->string('super_admin_name',45)->nullable()->comment('超级管理员name （backend_admin_users表name）');
            $table->integer('admin_id')->nullable()->comment('管理员id （backend_admin_users表id）');
            $table->string('admin_name',45)->nullable()->comment('管理员name （backend_admin_users表name）');
            $table->integer('user_id')->nullable()->comment('用户id （frontend_users表id）');
            $table->string('user_name',45)->nullable()->comment('用户id （frontend_users表username）');
            $table->decimal('amount',10,2)->nullable()->comment('金额');
            $table->text('comment')->nullable()->comment('内容');
            $table->integer('audit_flow_id')->nullable()->comment('审核流程表id （backend_admin_audit_flow_lists表id）');
            $table->tinyInteger('status')->nullable()->comment('审核状态 （0待审核 1审核通过 2审核驳回）');
            $table->integer('recharge_id')->nullable();
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
        Schema::dropIfExists('backend_admin_rechargehuman_logs');
    }
}
