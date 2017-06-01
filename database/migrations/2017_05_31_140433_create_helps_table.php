<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('真实姓名');
            $table->integer('gender')->comment('性别');
            $table->string('id_number')->comment('身份证号');
            $table->string('telephone')->comment('联系方式');
            $table->string('needed')->comment('所需物品');
            $table->integer('needed_num')->comment('所需数量');
            $table->longText('summary')->comment('情况简介');
            $table->string('image')->comment('照片地址');
            $table->string('province')->comment('省市');
            $table->string('street')->comment('街道');
            $table->string('address')->comment('详细地址');
            $table->integer('status')->default(2)->comment('状态 1: 正常 2: 审核中 3: 审核未通过');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('helps');
    }
}
