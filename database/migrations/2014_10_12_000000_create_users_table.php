<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->default(1)->unsigned()->comment('角色id');
            $table->string('telephone')->unique()->comment('联系方式');
            $table->string('name')->comment('昵称');
            $table->integer('gender')->default(3)->comment('性别 1: 男 2: 女 3: 其他');
            $table->string('password')->comment('密码');
            $table->string('school')->nullable()->commnet('学校');
            $table->string('dorm')->nullable()->comment('宿舍楼');
            $table->string('address')->nullable()->comment('详细地址');
            $table->string('status')->default(1)->comment('账户状态 1: 正常 2: 已禁用');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
