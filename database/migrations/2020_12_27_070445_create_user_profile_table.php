<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('用户编码');
            $table->string('nick_name')->comment('用户昵称');
            $table->tinyInteger('age')->comment('年龄');
            $table->string('name')->comment('用户真实姓名');
            $table->enum('sex',[0,1,2])->default(0)->comment('0 保密 1:男 2:女');
            $table->integer('city_id')->comment('城市编码'); // city
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
        Schema::dropIfExists('user_profile');
    }
}
