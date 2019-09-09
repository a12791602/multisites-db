<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendSystemAdsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_system_ads_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32)->nullable()->comment('名称');
            $table->tinyInteger('type')->nullable()->comment('类型');
            $table->tinyInteger('status')->nullable()->comment('状态 0关闭 1开启');
            $table->tinyInteger('ext_type')->nullable()->comment('1图片 2视频 3广告');
            $table->integer('l_size')->nullable()->comment('长度');
            $table->integer('w_size')->nullable()->comment('宽度');
            $table->integer('size')->nullable()->comment('大小');
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
        Schema::dropIfExists('frontend_system_ads_types');
    }
}
