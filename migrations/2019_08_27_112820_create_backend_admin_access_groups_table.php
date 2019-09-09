<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades;

class CreateBackendAdminAccessGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_admin_access_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_name', 15)->collation('utf8_general_ci')->comment('管理员组名称');
            $table->text('role')->nullable()->collation('utf8_general_ci')->comment('管理员组权限');
            $table->unsignedInteger('status')->nullable()->default(1)->comment('状态');
            $table->unsignedInteger('platform_id')->default(1)->nullable()->comment('平台id');
            $table->unique(['group_name', 'platform_id'],'group_name');
            $table->index('platform_id','fk_partner_access_platform_id_idx');
            $table->timestamp('created_at')->default(Facades\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists('backend_admin_access_groups');
    }
}
