<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades;
class CreateFrontendUsersHelpCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_users_help_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid')->comment('上级id');
            $table->string('menu',32)->comment('标题');
            $table->text('content')->nullable()->comment('内容');
            $table->tinyInteger('status')->default(0)->comment('开启状态 0关闭 1开启');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists('frontend_users_help_centers');
    }
}
