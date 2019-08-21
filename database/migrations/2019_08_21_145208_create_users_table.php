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
            $table->bigIncrements('id');
            $table->string('username',50)->comment("账号");
            $table->string('truename',15)->comment("真实姓名");
            $table->string('password',255)->comment("密码");
            $table->string('email',50)->default('')->comment('邮箱');
            $table->string('phone',15)->comment("手机号")->default('');
            $table->enum('sex',['先生','女士'])->comment("性别")->default('先生');
            $table->char('last_ip',15)->comment("最后登录ip")->default('');
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
        Schema::dropIfExists('users');
    }
}
