<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendAdminAuditPasswordsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_admin_audit_passwords_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('type')->comment('审核类型 1=password, 2=资金密码');
            $table->unsignedInteger('user_id')->comment('被审核用户的id');
            $table->text('audit_data')->collation('utf8_general_ci')->comment('待审核的数据');
            $table->tinyInteger('status')->default(0)->comment('0:审核中, 1:审核通过, 2:审核拒绝');
            $table->integer('audit_flow_id')->nullable()->comment('提交人 与审核人的记录流程');
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
        Schema::dropIfExists('backend_admin_audit_passwords_lists');
    }
}
