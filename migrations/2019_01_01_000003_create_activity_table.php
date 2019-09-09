<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// 活动相关
class CreateActivityTable extends Migration
{

    public function up()
    {
        // 活动列表
        Schema::create('activity_list', function (Blueprint $table) {
            $table->increments('id');

            // 商户标识
            $table->string('partner_sign', 32)->default(0);

            // 活动类型
            $table->integer('type')->default(1);

            // 活动配置ID
            $table->integer('config_id');

            // 货币类型 1 通用 2 礼金
            $table->tinyInteger('prize_currency_type')->default(1);

            // 配置
            $table->string('title',  64);
            $table->mediumText('content')->nullable();

            $table->string('image_homepage', 128)->default('');
            $table->string('image_list', 128)->default('');
            $table->string('image_content', 128)->default('');

            $table->tinyInteger('is_hot')->default(1);
            $table->tinyInteger('is_home')->default(1);
            $table->integer('top_score')->default(0);

            // 跳转链接
            $table->string('link', 128)->default('');

            // 时间
            $table->integer('start_time');
            $table->integer('end_time');

            //　创建人
            $table->integer('add_partner_admin_id')->default(0);
            $table->integer('update_partner_admin_id')->default(0);

            // 1 正常 0　维护
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->index(['partner_sign', 'top_score'], "al_p_s_t_s");
        });

        // 幸运大转盘配置
        Schema::create('activity_lucky_wheel_config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partner_sign', 32)->index();

            // 1 投注量 2 冲质量
            $table->tinyInteger('condition_type')->default(1);

            // 每次转动需要的配置
            $table->integer('condition_amount')->default(0);

            // 奖金货币类型 1 通用 2 礼金
            $table->tinyInteger('prize_currency_type')->default(1);

            // 奖级配置
            $table->mediumText('level_config');

            //　创建人
            $table->integer('add_partner_admin_id')->default(0);
            $table->integer('update_partner_admin_id')->default(0);

            // 1 正常 0　维护
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        // 幸运大转盘 日志
        Schema::create('activity_lucky_wheel_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partner_sign', 32)->index();

            // 活动ID
            $table->integer('aid');

            $table->integer('user_id');
            $table->integer('top_id');
            $table->integer('username');

            $table->tinyInteger('level')->default(0);
            $table->tinyInteger('prize_amount')->default(0);

            // 当时量
            $table->integer('condition_amount')->default(0);

            $table->timestamps();

            $table->index(['partner_sign', 'user_id'], "al_p_s_u_i");

        });

        // 通用签到配置
        Schema::create('activity_sign_in_config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partner_sign', 32)->index();

            $table->integer('day')->default(1);
            $table->integer('condition_bet')->default(0);
            $table->integer('condition_recharge')->default(0);

            // 奖金类型 1 资金 2 礼金
            $table->tinyInteger('prize_currency_type')->default(1);
            $table->tinyInteger('prize_amount')->default(0);

            //　创建人
            $table->integer('add_partner_admin_id')->default(0);
            $table->integer('update_partner_admin_id')->default(0);

            // 1 正常 0　维护
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        // 通用签到 日志
        Schema::create('activity_sign_in_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partner_sign', 32)->index();

            // 活动ID
            $table->integer('aid');

            $table->integer('user_id');
            $table->integer('top_id');
            $table->integer('username');

            $table->tinyInteger('day')->default(0);
            $table->tinyInteger('prize_amount')->default(0);

            // 当时流水量
            $table->integer('bet_amount')->default(0);
            $table->integer('recharge_amount')->default(0);

            $table->timestamps();

            $table->index(['partner_sign', 'user_id'], "al_p_s_u_i");

        });

        // 通用首冲送配置 用户首冲多少， 达到流水送多少
        Schema::create('activity_first_recharge_config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partner_sign', 32)->index();

            $table->integer('level')->default(1);
            $table->integer('recharge_amount')->default(0);

            // 奖励 百分比
            $table->tinyInteger('prize_percentage')->default(0);

            // 需要流水量
            $table->integer('need_bet_amount')->default(0);

            //　创建人
            $table->integer('add_partner_admin_id')->default(0);
            $table->integer('update_partner_admin_id')->default(0);

            // 1 正常 0　维护
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        // 通用首冲 日志
        Schema::create('activity_first_recharge_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partner_sign', 32)->index();

            // 活动ID
            $table->integer('aid');

            $table->integer('user_id');
            $table->integer('top_id');
            $table->integer('username');

            $table->tinyInteger('prize_percentage')->default(0);
            $table->tinyInteger('prize_amount')->default(0);

            // 当时流水量
            $table->integer('bet_amount')->default(0);

            $table->timestamps();

            $table->index(['partner_sign', 'user_id'], "al_p_s_u_i");

        });
    }

    public function down()
    {
        Schema::dropIfExists('activity_list');
        Schema::dropIfExists('activity_lucky_wheel_config');
        Schema::dropIfExists('activity_lucky_wheel_log');
        Schema::dropIfExists('activity_sign_in_config');
        Schema::dropIfExists('activity_sign_in_log');
        Schema::dropIfExists('activity_first_recharge_config');
        Schema::dropIfExists('activity_first_recharge_log');
    }
}
