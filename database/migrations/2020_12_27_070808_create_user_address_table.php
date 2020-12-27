<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_address', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('用户编码');
            $table->string('name')->comment('收货人姓名');
            $table->string('mobile')->comment('手机号码');
            $table->string('local')->comment('详细收货地址');
            $table->enum('default',[0,1])->default(0)->comment('是否默认 1:默认地址');
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
        Schema::dropIfExists('user_address');
    }
}
