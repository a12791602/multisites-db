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
            $table->integer('top_id');

            // 活动类型
            $table->integer('type')->default(1);

            // Top Id
            $table->string('title',  64);
            $table->text('content')->nullable();

            $table->text('configure')->nullable();

            $table->integer('start_time');
            $table->integer('end_time');

            // 状态
            $table->tinyInteger('status')->default(0);

            //　创建人
            $table->integer('add_admin_id')->default(0);
            $table->integer('update_admin_id')->default(0);

            // 1 正常 0　维护
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        // 幸运大转盘配置
        Schema::create('activity_lucky_wheel_config', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('top_id');

            // 活动类型
            $table->integer('type')->default(1);

            // 条件集合
            $table->text('content')->nullable();

            // 状态
            $table->tinyInteger('status')->default(0);

            //　创建人
            $table->integer('add_admin_id')->default(0);
            $table->integer('update_admin_id')->default(0);

            // 1 正常 0　维护
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        // 签到配置
        Schema::create('activity_sign_in_config', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('top_id');

            // 活动类型
            $table->integer('type')->default(1);

            // 条件集合
            $table->text('content')->nullable();

            // 状态
            $table->tinyInteger('status')->default(0);

            //　创建人
            $table->integer('add_admin_id')->default(0);
            $table->integer('update_admin_id')->default(0);

            // 1 正常 0　维护
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {



    }
}
