<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendInfoCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_info_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',45)->nullable()->comment('标题');
            $table->integer('parent')->nullable()->comment('父级id');
            $table->string('template',45)->nullable()->comment('模板');
            $table->integer('platform_id')->nullable()->comment('平台id （system_platforms表id）');
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
        Schema::dropIfExists('frontend_info_categories');
    }
}
