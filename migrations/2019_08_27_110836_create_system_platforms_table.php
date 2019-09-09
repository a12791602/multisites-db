<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemPlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_platforms', function (Blueprint $table) {
            $table->increments('platform_id');
            $table->string('platform_name',20);
            $table->string('platform_sign',20);
            $table->unsignedInteger('status')->nullable()->default(1);
            $table->longText('comments');
            $table->integer('prize_group_min')->nullable()->default(1700);
            $table->integer('prize_group_max')->nullable()->default(1980);
            $table->integer('single_price')->nullable()->default(2);
            $table->string('open_mode',255)->nullable()->default('1|0.1|0.01');
            $table->integer('admin_id')->nullable();
            $table->integer('last_admin_id')->nullable();
            $table->index(['platform_id', 'status'],'ID');
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
        Schema::dropIfExists('system_platforms');
    }
}
