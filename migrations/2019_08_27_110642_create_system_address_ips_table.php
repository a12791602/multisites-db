<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemAddressIpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_address_ips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip',16)->nullable();
            $table->string('country',64)->nullable()->comment('国家');
            $table->string('region',64)->nullable()->comment('省份');
            $table->string('city',64)->nullable()->comment('城市');
            $table->string('county',64)->nullable()->comment('县');
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
        Schema::dropIfExists('system_address_ips');
    }
}
