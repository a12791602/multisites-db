<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// 彩票相关
class CreateLotteryTable extends Migration
{

    public function up()
    {
        Schema::create('lottery_basic_methods', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('lottery_type');
            $table->boolean('series_id')->nullable();
            $table->string('series_code', 20)->nullable();
            $table->integer('type')->unsigned()->nullable()->index('type');
            $table->string('name', 20);
            $table->string('wn_function', 64)->nullable();
            $table->boolean('sequencing')->comment('定位');
            $table->boolean('digital_count');
            $table->boolean('unique_count')->nullable()->comment('去重后的数字个数');
            $table->boolean('max_repeat_time')->nullable()->comment('重号的最大重复次数');
            $table->boolean('min_repeat_time')->nullable();
            $table->boolean('span')->nullable();
            $table->boolean('min_span')->nullable();
            $table->boolean('choose_count')->nullable()->comment('计算组合时需要选择的数字个数');
            $table->boolean('special_count')->nullable();
            $table->boolean('fixed_number')->nullable()->comment('固定号码');
            $table->smallInteger('price')->unsigned()->default(2);
            $table->boolean('buy_length')->default(3);
            $table->boolean('wn_length')->default(3);
            $table->boolean('wn_count');
            $table->string('valid_nums', 50)->default('');
            $table->string('rule', 50)->default('');
            $table->integer('all_count')->unsigned()->default(0);
            $table->string('bet_rule', 1024)->nullable();
            $table->string('bonus_note', 1024)->nullable();
            $table->timestamps();
        });

        Schema::create('lottery_basic_ways', function(Blueprint $table)
        {
            $table->boolean('id')->primary();
            $table->boolean('lottery_type')->default(1);
            $table->string('name', 10);
            $table->string('function', 64);
            $table->string('description')->nullable();
            $table->integer('sequence')->unsigned()->nullable();
            $table->timestamps();
            $table->unique(['lottery_type','name'], 'type_name');
        });

        Schema::create('lottery_issue_rules', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('lottery_id')->comment('彩票id （lottery_lists表id）');
            $table->string('lottery_name')->comment('彩票名（lottery_lists表cn_name）');
            $table->time('begin_time')->comment('开始时间');
            $table->time('end_time')->comment('结束时间');
            $table->integer('issue_seconds')->comment('奖期间隔时间（秒）');
            $table->time('first_time')->comment('第一期时间');
            $table->smallInteger('adjust_time');
            $table->smallInteger('encode_time');
            $table->smallInteger('issue_count');
            $table->boolean('status')->default(1)->comment('状态 0关闭 1开启');
            $table->timestamps();
        });

        Schema::create('lottery_issues', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('lottery_id', 32)->comment('彩种标识');
            $table->string('lottery_name', 32)->comment('彩种中文名');
            $table->string('issue', 64)->nullable()->comment('奖期号');
            $table->integer('issue_rule_id')->comment('奖期规则id （lottery_issue_rules）');
            $table->integer('begin_time')->comment('奖期开始时间');
            $table->integer('end_time')->comment('奖期结束时间');
            $table->integer('official_open_time')->comment('官方开奖时间');
            $table->integer('allow_encode_time')->default(0)->comment('录号时间');
            $table->string('official_code', 64)->nullable()->comment('开奖号码');
            $table->boolean('status_encode')->default(0)->comment('录号状态 （0未录号 1已录号）');
            $table->boolean('status_calculated')->default(0);
            $table->boolean('status_prize')->default(0);
            $table->boolean('status_commission')->default(0);
            $table->boolean('status_trace')->default(0);
            $table->integer('encode_time')->default(0);
            $table->integer('calculated_time')->default(0);
            $table->integer('prize_time')->default(0);
            $table->integer('commission_time')->default(0);
            $table->integer('trace_time')->default(0);
            $table->integer('encode_id')->nullable();
            $table->string('encode_name', 64)->nullable();
            $table->integer('day')->default(0);
            $table->timestamps();
        });

        Schema::create('lottery_lists', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('lottery_type')->nullable();
            $table->string('cn_name', 32)->comment('彩票中文名');
            $table->string('en_name', 32)->comment('彩票英文名');
            $table->string('series_id', 32)->comment('彩票系列 （lottery_series表id）');
            $table->boolean('is_fast')->default(1)->comment('是否是快彩');
            $table->boolean('auto_open')->default(0);
            $table->integer('max_trace_number')->default(50);
            $table->integer('day_issue')->comment('一天的期数');
            $table->string('issue_format', 32);
            $table->string('issue_type', 32)->default('day');
            $table->string('valid_code', 256)->comment('合法号码');
            $table->integer('code_length')->comment('号码长度');
            $table->string('positions', 256)->comment('号码位置');
            $table->integer('min_prize_group')->comment('最小奖金组');
            $table->integer('max_prize_group')->comment('最大奖金组');
            $table->integer('min_times');
            $table->integer('max_times');
            $table->decimal('max_profit_bonus', 15, 4)->nullable();
            $table->string('valid_modes', 32);
            $table->boolean('status')->default(0)->comment('状态 0关闭 1开启');
            $table->string('icon_path', 128)->nullable();
            $table->timestamps();
        });

        Schema::create('lottery_methods_layout_displays', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('display_code', 32);
            $table->string('display_name', 32);
            $table->timestamps();
        });

        Schema::create('lottery_methods_layouts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('validation_id');
            $table->string('display_code', 32);
            $table->integer('rule_id')->unsigned()->comment('lottery_methods_number_rules表id');
            $table->timestamps();
        });

        Schema::create('lottery_methods_number_button_rules', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type', 32);
            $table->text('value');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });

        Schema::create('lottery_methods_standards', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('series_id', 32)->comment('系列标识');
            $table->string('lottery_name', 32)->comment('彩种中文名');
            $table->string('lottery_id', 32)->comment('彩种标识');
            $table->string('method_id', 32)->comment('玩法标识');
            $table->string('method_name', 32)->comment('玩法中文名');
            $table->string('method_group', 32)->comment('玩法组');
            $table->string('method_row', 32)->nullable()->comment('玩法行');
            $table->integer('group_sort')->default(0);
            $table->integer('row_sort')->default(0);
            $table->integer('method_sort')->default(0);
            $table->boolean('show')->default(1)->comment('展示状态 （0不显示 1显示）');
            $table->boolean('status')->default(0)->comment('开启状态 （0关闭 1开启）');
            $table->integer('total')->nullable();
            $table->timestamps();
        });

        Schema::create('lottery_methods', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('series_id', 32)->comment('系列标识');
            $table->string('lottery_name', 32)->comment('彩种中文名');
            $table->string('lottery_id', 32)->comment('彩种标识');
            $table->string('method_id', 32)->comment('玩法标识');
            $table->string('method_name', 32)->comment('玩法中文名');
            $table->string('method_group', 32)->comment('玩法组');
            $table->string('method_row', 32)->nullable()->comment('玩法行');
            $table->integer('group_sort')->default(0);
            $table->integer('row_sort')->default(0);
            $table->integer('method_sort')->default(0);
            $table->boolean('show')->default(1)->comment('展示状态 （0不显示 1显示）');
            $table->boolean('status')->default(0)->comment('开启状态 （0关闭 1开启）');
            $table->integer('total')->nullable();
            $table->timestamps();
        });

        Schema::create('lottery_methods_validations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('method_id', 16)->nullable()->comment('玩法标识');
            $table->string('regex', 64)->nullable()->comment('正则表达式');
            $table->integer('total')->nullable();
            $table->integer('min_block')->nullable();
            $table->integer('max_block')->nullable();
            $table->text('sample_min', 65535)->nullable();
            $table->text('sample_max', 65535)->nullable();
            $table->string('explode', 45)->nullable();
            $table->boolean('num_count')->nullable();
            $table->string('spliter', 16)->nullable();
            $table->boolean('type')->nullable()->comment('1.数字   2.字母   3.数字+字母  4.range字段自定义');
            $table->string('range', 64)->nullable();
            $table->string('example')->nullable();
            $table->string('describe')->nullable();
            $table->string('helper')->nullable();
            $table->string('button_id', 32)->nullable();
            $table->timestamps();
        });

        Schema::create('lottery_methods_ways_levels', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('method_id', 16)->nullable()->comment('玩法标识');
            $table->boolean('level')->nullable()->comment('等级');
            $table->integer('basic_method_id')->nullable()->comment('lottery_basic_methods表id');
            $table->string('method_name', 16)->nullable()->comment('玩法中文名');
            $table->string('level_name', 32)->nullable();
            $table->string('series_id', 16)->nullable()->comment('系列标识');
            $table->string('position', 45)->nullable()->comment('开奖位置');
            $table->integer('count')->nullable();
            $table->decimal('prize', 10)->nullable()->comment('奖金');
            $table->timestamps();
        });

        Schema::create('lottery_series_methods', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('series_id_old')->index('series_id');
            $table->string('series_code')->nullable()->comment('系列标识');
            $table->string('name', 30)->nullable()->comment('玩法中文名');
            $table->integer('basic_method_id')->unsigned()->nullable()->comment('lottery_basic_methods表id');
            $table->boolean('offset')->default(0);
            $table->boolean('hidden')->default(0)->index('hidden');
            $table->boolean('open')->default(1)->index('open');
            $table->timestamps();
        });

        Schema::create('lottery_series', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('series_name', 45)->nullable();
            $table->string('title', 45)->nullable();
            $table->boolean('status')->nullable();
            $table->string('encode_splitter', 15)->nullable();
            $table->timestamps();
        });

        Schema::create('lottery_series_ways', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('lottery_type')->nullable()->comment('类型（1.开奖号码可重复 2.开奖号码不可重复）');
            $table->boolean('series_id_old')->index('series_id');
            $table->integer('series_id')->nullable()->comment('彩种系列id');
            $table->string('series_code', 20)->nullable()->comment('彩种系列标识');
            $table->string('lottery_method_id', 10)->nullable()->comment('玩法标识');
            $table->string('name', 30)->comment('玩法中文名');
            $table->string('short_name', 30)->nullable()->default('');
            $table->integer('series_way_method_id')->unsigned()->nullable();
            $table->boolean('basic_way_id');
            $table->string('basic_methods', 200);
            $table->string('series_methods', 200);
            $table->boolean('digital_count')->nullable();
            $table->smallInteger('price')->unsigned();
            $table->string('offset', 30)->nullable();
            $table->boolean('buy_length')->nullable();
            $table->boolean('wn_length')->nullable();
            $table->boolean('wn_count')->nullable();
            $table->boolean('area_count')->nullable();
            $table->string('area_config', 20)->nullable();
            $table->string('area_position', 10)->nullable();
            $table->string('valid_nums', 50)->nullable();
            $table->string('rule', 50)->nullable();
            $table->string('all_count', 100);
            $table->string('bonus_note', 1024)->nullable();
            $table->string('bet_note', 1024)->nullable();
            $table->timestamps();
            $table->boolean('is_enable_extra')->default(0);
            $table->unique(['series_way_method_id','basic_way_id','series_methods','offset','area_position'], 'way_method');
        });

        Schema::create('lottery_trace_lists', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('top_id');
            $table->integer('parent_id');
            $table->string('rid', 256);
            $table->integer('trace_id')->nullable();
            $table->integer('order_queue')->nullable();
            $table->string('series_id', 32)->comment('彩种系列标识');
            $table->integer('project_id')->nullable();
            $table->string('project_serial_number', 64)->nullable()->comment('投注单号');
            $table->string('issue', 32)->comment('奖期号');
            $table->string('username', 64)->comment('用户名');
            $table->boolean('is_tester')->default(0);
            $table->string('lottery_sign', 32)->comment('彩种标识');
            $table->string('method_sign', 32)->comment('玩法标识');
            $table->string('method_group', 32)->comment('玩法组');
            $table->string('method_name', 32)->comment('玩法中文名');
            $table->text('bet_number')->comment('下注号码');
            $table->integer('times')->default(1)->comment('倍数');
            $table->decimal('single_price', 15, 4)->comment('单注金额');
            $table->decimal('total_price', 15, 4)->comment('总下注金额');
            $table->decimal('mode', 15, 4)->default(1.0000)->comment('模式 （元：1.0000   角：0.1000   分0.0100）');
            $table->integer('user_prize_group')->comment('用户奖金组');
            $table->integer('bet_prize_group')->comment('彩票奖金组');
            $table->char('ip', 15)->comment('ip');
            $table->string('proxy_ip', 20);
            $table->boolean('bet_from')->default(1);
            $table->boolean('status')->default(0)->comment('0 等待追号 1正在追号  2追号完成   3玩家撤销  4管理员撤销  5系统撤销  6中奖停止');
            $table->boolean('finished_status')->default(0);
            $table->timestamp('cancel_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });

        Schema::create('lottery_traces', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('top_id')->index('traces_top_id_index');
            $table->integer('parent_id')->index('traces_parent_id_index');
            $table->string('rid', 256)->default('')->index('traces_rid_index');
            $table->string('username', 64)->default('');
            $table->boolean('is_tester')->default(0);
            $table->string('series_id', 32)->comment('彩种系列标识');
            $table->string('lottery_sign', 32)->comment('彩种标识');
            $table->string('method_sign', 32)->index('traces_method_sign_index')->comment('玩法标识');
            $table->string('method_group', 32)->comment('玩法组');
            $table->string('method_name', 32)->index('traces_method_name_index')->comment('玩法中文名');
            $table->text('bet_number')->comment('下注号码');
            $table->integer('times')->default(1)->comment('倍数');
            $table->decimal('single_price', 15, 4)->comment('单注金额');
            $table->decimal('total_price', 15, 4)->comment('下注总金额');
            $table->boolean('win_stop')->default(0)->comment('中奖后停止追号 （0否 1是）');
            $table->decimal('mode', 15, 4)->default(1.0000)->comment('模式 （元：1.0000   角：0.1000   分0.0100）');
            $table->integer('user_prize_group')->comment('用户奖金组');
            $table->integer('bet_prize_group')->comment('彩种奖金组');
            $table->integer('total_issues');
            $table->integer('finished_issues')->default(0);
            $table->integer('canceled_issues')->default(0);
            $table->integer('finished_amount')->default(0);
            $table->decimal('finished_bonus', 18, 4)->nullable();
            $table->integer('canceled_amount')->default(0);
            $table->string('start_issue', 16)->comment('开始追号的奖期');
            $table->string('now_issue', 16)->comment('现在追号的奖期');
            $table->string('end_issue', 16)->comment('结束追号的奖期');
            $table->string('stop_issue', 16)->comment('停止追号的奖期');
            $table->text('issue_process', 65535)->comment('追号详情');
            $table->integer('add_time')->comment('开始时间');
            $table->integer('stop_time')->comment('结束时间');
            $table->char('ip', 15);
            $table->string('proxy_ip', 200);
            $table->boolean('bet_from')->default(1);
            $table->boolean('status')->default(0)->comment('0 正在追号  1追号完成   2中奖停止  4系统撤销  5玩家撤销');
            $table->boolean('finished_status')->default(0);
            $table->timestamps();
        });

        Schema::create('projects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('serial_number', 64)->nullable()->comment('投注订单号码');
            $table->integer('user_id');
            $table->string('username', 64)->default('');
            $table->integer('top_id')->index();
            $table->string('rid', 256)->default('');
            $table->integer('parent_id');
            $table->boolean('is_tester')->default(0);
            $table->string('series_id', 32)->comment('彩种系列标识');
            $table->integer('basic_method_id')->nullable()->comment('lottery_basic_methods表id');
            $table->string('lottery_sign', 32)->comment('彩种标识');
            $table->string('method_sign', 32)->comment('玩法标识');
            $table->string('method_group', 32)->comment('玩法组');
            $table->string('method_name', 32)->comment('玩法中文名');
            $table->integer('user_prize_group')->comment('用户奖金组');
            $table->integer('bet_prize_group')->comment('彩票奖金组');
            $table->integer('trace_id')->default(0);
            $table->integer('level')->nullable();
            $table->decimal('mode', 15, 4)->comment('模式 （元：1.0000   角：0.1000   分0.0100）');
            $table->integer('times')->unsigned()->comment('倍数');
            $table->decimal('price', 15, 4);
            $table->decimal('total_cost', 15, 4)->default(0.0000);
            $table->string('issue', 32)->comment('奖期号');
            $table->text('bet_number', 65535)->comment('下注的号码');
            $table->string('open_number', 64)->default('')->comment('开奖的号码');
            $table->string('winning_number', 60)->nullable()->comment('中奖号码');
            $table->string('prize_set', 64);
            $table->boolean('is_win')->default(0)->comment('是否中奖  （0否 1是）');
            $table->decimal('bonus', 15, 4)->default(0.0000)->comment('中奖金额');
            $table->decimal('point', 15, 4)->default(0.0000);
            $table->char('ip', 15);
            $table->string('proxy_ip', 200);
            $table->boolean('bet_from')->default(1);
            $table->boolean('status')->default(0)->comment('0已投注 1已撤销 2未中奖 3已中奖 4已派奖');
            $table->boolean('status_input')->default(0);
            $table->boolean('status_count')->default(0);
            $table->boolean('status_prize')->default(0);
            $table->boolean('status_commission')->default(0);
            $table->boolean('status_trace')->default(0);
            $table->boolean('status_stat')->default(0);
            $table->integer('time_bought')->default(0);
            $table->integer('time_input')->default(0);
            $table->integer('time_count')->default(0);
            $table->integer('time_prize')->default(0)->comment('派奖时间');
            $table->integer('commission_time')->default(0);
            $table->integer('time_trace')->default(0);
            $table->integer('time_cancel')->default(0);
            $table->integer('time_stat')->default(0);
            $table->timestamps();
            $table->index(['lottery_sign','time_bought']);
            $table->index(['issue','user_id']);
            $table->index(['user_id','lottery_sign','time_bought']);
        });
    }

    public function down()
    {



    }
}
