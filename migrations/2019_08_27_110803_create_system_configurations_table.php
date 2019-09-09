<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable()->default(0)->comment('父级id');
            $table->integer('pid')->comment('父类id, 顶级为0父类id, 顶级为0');
            $table->string('sign',32)->comment('sign 标识');
            $table->string('name',32)->comment('标题');
            $table->string('description',128)->nullable()->comment('描述');
            $table->string('value',128)->nullable()->comment('配置选项value');
            $table->integer('add_admin_id')->default(0)->comment('添加人, 系统添加为0');
            $table->integer('last_update_admin_id')->default(0)->comment('上次更改人id');
            $table->tinyInteger('status')->default(0)->comment('0 禁用 1 启用');
            $table->tinyInteger('display')->nullable()->default(1)->comment('是否显示 0不显示 1显示');
            $table->index('sign','sys_configures_sign_index');
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
        Schema::dropIfExists('system_configurations');
    }
}
