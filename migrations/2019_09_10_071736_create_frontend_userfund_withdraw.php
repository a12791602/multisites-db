<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUserfundWithdraw extends Migration
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

        Schema::create('users_withdraw_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('top_id')->comment('（frontend_users表top_id）');
            $table->integer('parent_id')->comment('（frontend_users表parent_id）');
            $table->integer('user_id')->comment('用户id（frontend_users表id）');
            $table->string('username',64)->comment('用户名 （frontend_users表username）');
            $table->tinyInteger('is_tester')->nullable();
            $table->string('rid',128)->comment('（frontend_users表rid）');
            $table->string('order_id',64)->default('')->comment('订单号');
            $table->integer('card_id')->comment('用户银行卡表id（frontend_users_bank_cards表id）');
            $table->string('card_number',64)->nullable();
            $table->string('card_username',32)->nullable();
            $table->string('bank_sign',32)->default('0');
            $table->unsignedBigInteger('amount')->default(0)->comment('提现金额');
            $table->unsignedBigInteger('real_amount')->default(0)->comment('实际金额');
            $table->integer('request_time')->default(0);
            $table->integer('expire_time')->default(0);
            $table->integer('process_time')->default(0)->comment('处理时间');
            $table->integer('process_day')->default(0)-> comment('处理日期');
            $table->string('source',32)->default('web');
            $table->string('client_ip',20)->default('')->comment('ip');
            $table->string('description',255)->default('')->comment('描述');
            $table->text('desc');
            $table->tinyInteger('status')->default(0);
            $table->integer('admin_id')->default(0)->comment('管理员id （backend_admin_users表id）');
            $table->index(['user_id', 'request_time'],'user_withdraw_user_id_request_time_index');
            $table->index(['user_id', 'process_time'],'user_withdraw_user_id_process_time_index');
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

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
    }
}
