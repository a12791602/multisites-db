<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUsersPrivacyFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_users_privacy_flows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->nullable()->comment('管理员id （backend_admin_users表id）');
            $table->string('admin_name',64)->collation('utf8_general_ci')->nullable()->comment('管理员名称 （backend_admin_users表name）');
            $table->integer('user_id')->nullable()->comment('用户id （frontend_users表id）');
            $table->string('username',64)->collation('utf8_general_ci')->nullable()->comment('用户名 （frontend_users表username）');
            $table->text('comment')->collation('utf8_general_ci')->nullable()->comment('内容');
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_users_privacy_flows');
    }
}
