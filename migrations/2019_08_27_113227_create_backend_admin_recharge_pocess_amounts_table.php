<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendAdminRechargePocessAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_admin_recharge_pocess_amounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->nullable()->comment('管理员id （backend_admin_users表id）');
            $table->decimal('fund',10,2)->nullable()->default(0.00)->comment('人工充值额度');
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
        Schema::dropIfExists('backend_admin_recharge_pocess_amounts');
    }
}
