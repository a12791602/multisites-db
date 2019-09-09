<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',64);
            $table->integer('top_id')->default(0)->nullable()->comment('最上级id');
            $table->integer('parent_id')->default(0)->nullable()->comment('上级id');
            $table->string('rid',256)->nullable();
            $table->integer('platform_id')->nullable();
            $table->string('sign',32)->comment('所属平台标识!');
            $table->integer('account_id')->nullable();
            $table->tinyInteger('type')->default(1)->comment('用户类型你:1 直属  2 代理 3 会员');
            $table->integer('vip_level')->nullable()->default(0)->comment('vip等级');
            $table->tinyInteger('is_tester')->nullable()->default(0);
            $table->tinyInteger('frozen_type')->nullable()->default(0)->comment('冻结类型:1, 禁止登录, 2, 禁止投注 3, 禁止提现,4禁止资金操作,5禁止投注');
            $table->string('password',64);
            $table->string('fund_password',64)->nullable();
            $table->integer('prize_group');
            $table->string('remember_token',100)->nullable();
            $table->integer('level_deep')->nullable()->default(0)->comment('用户等级深度');
            $table->char('register_ip',15);
            $table->char('last_login_ip',15)->nullable();
            $table->integer('register_time')->nullable();
            $table->timestamp('last_login_time')->nullable();
            $table->integer('user_specific_id')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->decimal('daysalary_percentage',3,1)->default(0.0)->comment('日工资比例');
            $table->tinyInteger('bonus_percentage')->default(0)->comment('分红比例');
            $table->string('pic_path',128)->nullable()->collation('utf8_general_ci')->comment('头像');
            $table->index(['sign', 'username'],'users_sign_username_index');
            $table->index(['sign', 'parent_id'],'users_sign_parent_id_index');
            $table->index(['sign', 'rid'],'users_sign_rid_index');
            $table->index(['sign', 'vip_level'],'users_sign_vip_level_index');
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
        Schema::dropIfExists('frontend_users');
    }
}
