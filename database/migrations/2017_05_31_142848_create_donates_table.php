<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('help_id')->unsigned()->comment('捐赠的帮助 id');
            $table->integer('user_id')->unsigned()->comment('捐赠人 id');
            $table->integer('status')->comment('状态 1: 待取货 2: 已取货');
            $table->integer('message')->nullable()->comment('物流信息');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donates');
    }
}
