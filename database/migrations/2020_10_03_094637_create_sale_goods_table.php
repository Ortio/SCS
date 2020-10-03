<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_goods', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('orders_id');
//            $table->foreign('order_id')->references('id')->on('orders');
            $table->string('name', 255)->nullable();
            $table->string('color', 50)->nullable();
            $table->decimal('price', 8,2)->default(0);
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
        Schema::dropIfExists('sale_goods');
    }
}
