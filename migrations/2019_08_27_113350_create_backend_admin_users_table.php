<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_admin_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',64)->comment('管理员名称');
            $table->string('email',255)->comment('邮箱');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255)->comment('密码');
            $table->text('remember_token')->nullable()->comment('token');
            $table->tinyInteger('is_test')->nullable()->default(0)->comment('是否测试号   0不是 1是');
            $table->integer('group_id')->nullable()->unsigned()->comment('管理员组id');
            $table->unsignedInteger('status')->nullable()->default(1)->comment('状态 0关闭 1开启');
            $table->unsignedInteger('platform_id')->nullable()->comment('平台id');
            $table->unsignedInteger('super_id')->nullable();
            $table->index(['platform_id', 'status'],'fk_platform_id_status');
            $table->index('group_id','backend_admin_users_group_id_fk_idx');
            $table->index('super_id','backend_admin_users_super_id_foreign');
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
        Schema::dropIfExists('backend_admin_users');
    }
}
