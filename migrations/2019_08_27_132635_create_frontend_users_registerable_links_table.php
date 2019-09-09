<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades;
class CreateFrontendUsersRegisterableLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_users_registerable_links', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->tinyInteger('is_tester')->nullable()->default(0)->comment('是非是测试用户');
            $table->unsignedInteger('user_id')->comment('用户id （frontend_users表id）');
            $table->string('username',32)->comment('用户名 （frontend_users表username）');
            $table->integer('prize_group')->nullable()->comment('奖金组');
            $table->tinyInteger('type')->nullable()->default(0)->comment('链接注册还是扫描注册');
            $table->unsignedInteger('valid_days')->comment('有效时间 单位天');
            $table->tinyInteger('is_agent')->default(0)->comment('0  用户 1 代理');
            $table->char('keyword',32);
            $table->string('note',100)->nullable()->comment('链接备注');
            $table->string('channel',50)->nullable()->comment('推广渠道');
            $table->string('agent_qqs',50)->nullable();
            $table->unsignedInteger('created_count')->default(0);
            $table->string('url',255)->comment('url内容');
            $table->integer('platform_id');
            $table->string('platform_sign',20)->default('');
            $table->unsignedTinyInteger('status')->default(0)->comment('状态(0:正常;1:关闭)');
            $table->timestamp('expired_at')->nullable()->comment('过期时间');
            $table->unique('keyword','keyword');
            $table->index(['user_id', 'status'],'idx_search');
            $table->index('user_id','idx_user');
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
        Schema::dropIfExists('frontend_users_registerable_links');
    }
}