<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendUsersAccountsReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_users_accounts_reports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sign', 32);
			$table->integer('user_id')->index('account_change_report_user_id_index')->comment('用户id（frontend_users表id）');
			$table->integer('top_id')->nullable()->comment('（frontend_users表top_id）');
			$table->integer('parent_id')->nullable()->comment('（frontend_users表parent_id）');
			$table->string('rid', 256)->index('account_change_report_rid_index')->comment('（frontend_users表rid）');
			$table->string('username', 32)->comment('（frontend_users表username）');
			$table->integer('from_id')->default(0);
			$table->integer('from_admin_id')->default(0);
			$table->integer('to_id')->default(0);
			$table->string('type_sign', 32)->comment('帐变类型sign（account_change_types表sign）');
			$table->string('type_name', 32)->nullable()->comment('帐变类型name（account_change_types表name）');
			$table->string('lottery_id', 32)->nullable()->comment('彩票（lottery_lists表en_name）');
			$table->string('method_id', 32)->nullable()->comment('彩票玩法（lottery_methods表method_id）');
			$table->integer('project_id')->default(0);
			$table->string('issue', 64)->nullable()->comment('彩票期号（lottery_issues表issue）');
			$table->string('activity_sign', 32)->nullable()->index('account_change_report_activity_sign_index');
			$table->decimal('amount', 18, 4)->unsigned()->default(0.0000)->comment('变动前的资金');
			$table->decimal('before_balance', 18, 4)->unsigned()->default(0.0000)->comment('变动资金');
			$table->decimal('balance', 18, 4)->unsigned()->default(0.0000)->comment('变动后的资金');
			$table->decimal('before_frozen_balance', 18, 4)->unsigned()->default(0.0000);
			$table->decimal('frozen_balance', 18, 4)->unsigned()->default(0.0000);
			$table->boolean('frozen_type')->default(0);
			$table->boolean('is_tester')->default(0)->comment('是否是测试用户（frontend_users表is_tester）');
			$table->integer('process_time')->default(0);
			$table->string('desc', 256);
			$table->timestamps();
			$table->index(['sign','process_time'], 'account_change_report_sign_process_time_index');
			$table->index(['user_id','type_sign','process_time'], 'account_change_report_user_id_type_sign_process_time_index');
			$table->index(['sign','lottery_id','method_id'], 'account_change_report_sign_lottery_id_method_id_index');
			$table->index(['sign','user_id','process_time'], 'account_change_report_sign_user_id_process_time_index');
			$table->index(['sign','project_id'], 'account_change_report_sign_project_id_day_index');
			$table->index(['sign','type_sign','process_time'], 'account_change_report_sign_type_sign_process_time_index');
			$table->index(['sign','issue','project_id'], 'account_change_report_sign_issue_project_id_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('frontend_users_accounts_reports');
	}

}
