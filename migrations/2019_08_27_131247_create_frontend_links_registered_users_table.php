<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendLinksRegisteredUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_links_registered_users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('register_link_id')->nullable()->comment('注册链接id（frontend_users_registerable_links表id）');
            $table->unsignedInteger('user_id')->comment('用户id （backend_admin_users表id）');
            $table->string('url',255)->comment('url内容');
            $table->string('username',16)->comment('用户名 （backend_admin_users表username）');
            $table->index('register_link_id','create_user_link_user_create_user_link_id_index');
            $table->index('user_id','create_user_link_user_user_id_index');
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
        Schema::dropIfExists('frontend_links_registered_users');
    }
}
