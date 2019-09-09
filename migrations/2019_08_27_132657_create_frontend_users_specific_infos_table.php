<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUsersSpecificInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_users_specific_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname',16)->nullable()->comment('昵称');
            $table->string('realname',16)->nullable()->comment('真实姓名');
            $table->string('mobile',11)->nullable()->comment('手机');
            $table->string('email',32)->nullable()->comment('邮箱');
            $table->string('zip_code',6)->nullable()->comment('邮编');
            $table->string('address',128)->nullable()->comment('详细地址');
            $table->tinyInteger('register_type')->default(0)->comment('注册类型：0.普通注册1.人工开户注册2.链接开户注册3.扫码开户注册');
            $table->integer('total_members')->nullable()->default(0)->comment('用户发展客户总数');
            $table->integer('user_id')->nullable()->comment('用户id');
            $table->timestamps();
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
        Schema::dropIfExists('frontend_users_specific_infos');
    }
}
