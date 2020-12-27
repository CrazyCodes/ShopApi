<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_order', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('用户编码');
            $table->string('order_sn')->comment('订单号');
            $table->integer('product_num')->comment('商品数量');
            $table->decimal('price',12,2)->comment('订单总价');
            $table->integer('product_id')->comment('商品编码'); // product_table
            $table->string('product_name')->comment('商品名称');
            $table->decimal('product_price',12,2)->comment('商品价格');
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
        Schema::dropIfExists('user_order');
    }
}
