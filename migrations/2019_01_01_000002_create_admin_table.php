<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// 后台 总管理 相关
class CreateAdminTable extends Migration
{

    public function up()
    {
        // 后台管理员
        Schema::create('backend_admin_users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 64)->comment('管理员名称');
            $table->string('email')->comment('邮箱');
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password')->comment('密码');
            $table->text('remember_token')->nullable()->comment('token');
            $table->boolean('is_test')->nullable()->default(0)->comment('是否测试号   0不是 1是');
            $table->integer('group_id')->nullable()->index('backend_admin_users_group_id_fk_idx')->comment('管理员组id');
            $table->integer('status')->unsigned()->nullable()->default(1)->comment('状态 0关闭 1开启');
            $table->integer('platform_id')->unsigned()->nullable()->comment('平台id');
            $table->integer('super_id')->unsigned()->nullable()->index('backend_admin_users_super_id_foreign');
            $table->timestamps();
            $table->index(['platform_id','status'], '_platform_id_status');
        });

        // 管理路由
        Schema::create('backend_admin_routes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('route_name', 64)->nullable()->comment('路由名称');
            $table->string('controller', 64)->nullable()->comment('控制器路径');
            $table->string('method', 64)->nullable()->comment('方法');
            $table->integer('menu_group_id')->unsigned()->nullable()->index('fk_partner_admin_route_menu_group_idx')->comment('菜单组id');
            $table->string('title', 45)->nullable()->comment('标题');
            $table->mediumText('description')->nullable()->comment('说明');
            $table->boolean('is_open')->nullable()->default(0)->comment('0封闭式 1开放式');
            $table->timestamps();
        });

        // 后台管理组
        Schema::create('backend_admin_access_groups', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('group_name', 15)->comment('管理员组名称');
            $table->mediumText('role')->nullable()->comment('管理员组权限');
            $table->integer('status')->unsigned()->default(1)->comment('状态');
            $table->timestamps();
            $table->integer('platform_id')->unsigned()->default(1)->index('fk_partner_access_platform_id_idx')->comment('平台id');
            $table->unique(['group_name','platform_id'], 'group_name');
        });

        Schema::create('backend_admin_audit_flow_lists', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('admin_id')->nullable()->comment('提交审核的管理员id （backend_admin_users表id）');
            $table->integer('auditor_id')->nullable()->comment('审核的管理员id （backend_admin_users表id）');
            $table->text('apply_note', 65535)->nullable()->comment('提交审核的备注');
            $table->text('auditor_note', 65535)->nullable()->comment('审核返回的备注');
            $table->timestamps();
            $table->string('admin_name', 64)->nullable()->comment('提交审核的管理员name （backend_admin_users表name）');
            $table->string('auditor_name', 64)->nullable()->comment('审核的管理员name （backend_admin_users表name）');
            $table->string('username', 64)->nullable()->comment('用户名（frontend_users表username）');
        });

        Schema::create('backend_admin_audit_passwords_lists', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('type')->unsigned()->comment('审核类型 1=password, 2=资金密码');
            $table->integer('user_id')->unsigned()->comment('被审核用户的id');
            $table->text('audit_data', 65535)->comment('待审核的数据');
            $table->boolean('status')->default(0)->comment('0:审核中, 1:审核通过, 2:审核拒绝');
            $table->integer('audit_flow_id')->nullable()->comment('提交人 与审核人的记录流程');
            $table->timestamps();
        });

        Schema::create('backend_admin_message_articles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('category_id')->nullable()->comment('文章类型 （frontend_info_categories表id）');
            $table->string('title', 45)->nullable()->comment('标题');
            $table->string('summary', 45)->nullable()->comment('描述');
            $table->text('content', 65535)->nullable()->comment('内容');
            $table->string('search_text', 45)->nullable()->comment('查询关键字');
            $table->boolean('is_for_agent')->nullable()->comment('是否代理专属');
            $table->boolean('status')->nullable()->comment('开启状态');
            $table->integer('audit_flow_id')->nullable()->comment('审核流程表id（backend_admin_audit_flow_lists表id）');
            $table->integer('add_admin_id')->nullable()->comment('添加文章的管理员id（backend_admin_users表id）');
            $table->integer('last_update_admin_id')->nullable()->comment('最后修改的管理员id（backend_admin_users表id）');
            $table->integer('sort')->unsigned()->nullable()->comment('排序');
            $table->timestamps();
            $table->string('pic_path')->nullable()->comment('图片路径');
        });

        Schema::create('backend_admin_recharge_permit_groups', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('group_id')->nullable()->comment('管理组id (backend_admin_access_groups表id)');
            $table->string('group_name', 45)->nullable()->comment('管理组name (backend_admin_access_groups表name)');
            $table->timestamps();
        });

        Schema::create('backend_admin_recharge_process_amounts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('admin_id')->nullable()->comment('管理员id （backend_admin_users表id）');
            $table->decimal('fund', 10)->nullable()->default(0.00)->comment('人工充值额度');
            $table->timestamps();
        });

        Schema::create('backend_admin_rechargehuman_logs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('type')->nullable()->comment('类型 （0系统操作 1超管对管理员操作 2管理员对用户操作 3超管对用户操作）');
            $table->boolean('in_out')->nullable()->comment('资金类型 （0减少 1增加）');
            $table->integer('super_admin_id')->nullable()->comment('超级管理员id （backend_admin_users表id）');
            $table->string('super_admin_name', 45)->nullable()->comment('超级管理员name （backend_admin_users表name）');
            $table->integer('admin_id')->nullable()->comment('管理员id （backend_admin_users表id）');
            $table->string('admin_name', 45)->nullable()->comment('管理员name （backend_admin_users表name）');
            $table->integer('user_id')->nullable()->comment('用户id （frontend_users表id）');
            $table->string('user_name', 45)->nullable()->comment('用户id （frontend_users表username）');
            $table->decimal('amount', 10)->nullable()->comment('金额');
            $table->text('comment', 65535)->nullable()->comment('内容');
            $table->integer('audit_flow_id')->nullable()->comment('审核流程表id （backend_admin_audit_flow_lists表id）');
            $table->boolean('status')->nullable()->comment('审核状态 （0待审核 1审核通过 2审核驳回）');
            $table->timestamps();
        });
    }

    public function down()
    {

        Schema::dropIfExists('backend_admin_access_groups');
        Schema::dropIfExists('backend_admin_audit_flow_lists');
        Schema::dropIfExists('backend_admin_audit_passwords_lists');
        Schema::dropIfExists('backend_admin_message_articles');
        Schema::dropIfExists('backend_admin_recharge_permit_groups');
        Schema::dropIfExists('backend_admin_recharge_process_amounts');
        Schema::dropIfExists('backend_admin_routes');
        Schema::dropIfExists('backend_admin_users');

    }
}
