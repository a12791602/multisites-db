<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendWebRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_web_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('route_name',64)->nullable()->comment('路由');
            $table->string('controller',64)->nullable()->comment('控制器');
            $table->string('method',64)->nullable()->comment('方法');
            $table->integer('frontend_model_id')->nullable()->comment('模块id （frontend_allocated_models表id）');
            $table->string('title',45)->nullable()->comment('路由标题');
            $table->text('description')->nullable()->comment('描述');
            $table->tinyInteger('is_open')->nullable()->default(0)->comment('是否开放 (0不开放 1开发)');
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
        Schema::dropIfExists('frontend_web_routes');
    }
}
