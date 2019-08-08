<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBackendAdminMessageArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
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
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('backend_admin_message_articles');
	}

}
