<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBackendAdminAuditFlowListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
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
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('backend_admin_audit_flow_lists');
	}

}
