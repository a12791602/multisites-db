<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendAdminRechargePermitGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_admin_recharge_permit_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->nullable()->comment('管理组id (backend_admin_access_groups表id)');
            $table->string('group_name',45)->nullable()->comment('管理组name (backend_admin_access_groups表name)');
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
        Schema::dropIfExists('backend_admin_recharge_permit_groups');
    }
}
