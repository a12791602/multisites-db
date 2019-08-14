<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBackendAdminUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('backend_admin_users', function(Blueprint $table)
		{
			$table->foreign('group_id', 'backend_admin_users_group_id_fk')->references('id')->on('backend_admin_access_groups')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('platform_id', 'backend_admin_users_status_foreign')->references('platform_id')->on('system_platforms')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('super_id')->references('id')->on('backend_admin_users')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('backend_admin_users', function(Blueprint $table)
		{
			$table->dropForeign('backend_admin_users_group_id_fk');
			$table->dropForeign('backend_admin_users_status_foreign');
			$table->dropForeign('backend_admin_users_super_id_foreign');
		});
	}

}
