<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendAdminRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_admin_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('route_name',64)->collation('utf8_general_ci')->nullable()->comment('路由名称');
            $table->string('controller',128)->collation('utf8_general_ci')->nullable()->comment('控制器路径');
            $table->string('method',64)->collation('utf8_general_ci')->nullable()->comment('方法');
            $table->unsignedInteger('menu_group_id')->nullable()->comment('菜单组id');
            $table->string('title',45)->collation('utf8_general_ci')->nullable()->comment('标题');
            $table->text('description')->collation('utf8_general_ci')->nullable()->comment('说明');
            $table->tinyInteger('is_open')->nullable()->default(0)->comment('0封闭式 1开放式');
            $table->index('menu_group_id','fk_partner_admin_route_menu_group_idx');
            $table->nullableTimestamps();
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
        Schema::dropIfExists('backend_admin_routes');
    }
}
