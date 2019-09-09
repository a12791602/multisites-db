<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUsersAccountsReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_users_accounts_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number',64)->nullable();
            $table->string('sign',32);
            $table->integer('user_id')->comment('用户id（frontend_users表id）');
            $table->integer('top_id')->nullable()->comment('（frontend_users表top_id）');
            $table->integer('parent_id')->nullable()->comment('（frontend_users表parent_id）');
            $table->string('rid',256)->comment('（frontend_users表rid）');
            $table->string('username',32)->comment('（frontend_users表rid）');
            $table->integer('from_id')->default(0);
            $table->integer('from_admin_id')->default(0);
            $table->integer('to_id')->default(0);
            $table->string('type_sign',32)->comment('帐变类型sign（account_change_types表sign）');
            $table->string('type_name',32)->nullable()->comment('帐变类型name（account_change_types表name）');
            $table->tinyInteger('in_out')->nullable();
            $table->string('lottery_id',32)->nullable()->comment('彩票（lottery_lists表en_name）');
            $table->string('method_id',32)->nullable()->comment('彩票玩法（lottery_methods表method_id）');
            $table->integer('project_id')->default(0);
            $table->string('issue',64)->nullable()->comment('彩票期号（lottery_issues表issue）');
            $table->string('activity_sign',32)->nullable();
            $table->unsignedDecimal('amount',18,4)->default(0.0000)->comment('变动前的资金');
            $table->unsignedDecimal('before_balance',18,4)->default(0.0000)->comment('变动资金');
            $table->unsignedDecimal('balance',18,4)->default(0.0000)->comment('变动后的资金');
            $table->unsignedDecimal('before_frozen_balance',18,4)->default(0.0000);
            $table->unsignedDecimal('frozen_balance',18,4)->default(0.0000);
            $table->tinyInteger('frozen_type')->default(0);
            $table->tinyInteger('is_tester')->default(0)->comment('是否是测试用户（frontend_users表is_tester）');
            $table->integer('process_time')->default(0);
            $table->string('desc',256);
            $table->index(['sign' , 'user_id', 'process_time'], 'account_change_report_sign_user_id_process_time_index');
            $table->index(['sign', 'type_sign', 'process_time'], 'account_change_report_sign_type_sign_process_time_index');
            $table->index(['sign', 'lottery_id', 'method_id'], 'account_change_report_sign_lottery_id_method_id_index');
            $table->index(['sign', 'issue', 'project_id'], 'account_change_report_sign_issue_project_id_index');
            $table->index(['sign', 'project_id'], 'account_change_report_sign_project_id_day_index');
            $table->index(['sign', 'process_time'], 'account_change_report_sign_process_time_index');
            $table->index(['user_id', 'type_sign', 'process_time'], 'account_change_report_user_id_type_sign_process_time_index');
            $table->index('user_id', 'account_change_report_user_id_index');
            $table->index('rid', 'account_change_report_rid_index');
            $table->index('activity_sign', 'account_change_report_activity_sign_index');
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
        Schema::dropIfExists('frontend_users_accounts_reports');
    }
}
