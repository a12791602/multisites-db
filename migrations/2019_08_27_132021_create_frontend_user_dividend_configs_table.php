<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendUserDividendConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_user_dividend_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sign',255)->comment('sign （frontend_users表sign）');
            $table->integer('top_id')->comment('上级id （frontend_users表top_id）');
            $table->integer('parent_id')->comment('（frontend_users表parent_id）');
            $table->integer('user_id')->comment('用户id （frontend_users表id）');
            $table->string('username',20)->comment('用户名 （frontend_users表username）');
            $table->text('contract')->nullable();
            $table->text('temp')->nullable();
            $table->tinyInteger('verify')->default(0);
            $table->tinyInteger('status')->default(0)->comment('状态 0关闭 1开启');
            $table->integer('verify_time')->default(0);
            $table->index('sign','user_dividend_config_sign_index');
            $table->index(['parent_id', 'user_id'],'user_dividend_config_parent_id_user_id_index');
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_user_dividend_configs');
    }
}
