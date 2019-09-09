<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('region_id',16)->nullable()->comment('行政编码');
            $table->string('region_parent_id',16)->nullable()->comment('父级行政编码');
            $table->string('region_name',64)->nullable()->comment('名称');
            $table->tinyInteger('region_level')->nullable()->comment('1.省 2.市(市辖区)3.县(区、市)4.镇(街道)');
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
        Schema::dropIfExists('users_regions');
    }
}
