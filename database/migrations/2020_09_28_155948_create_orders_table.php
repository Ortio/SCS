<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('phone', 25);
//            $table->decimal('price', 8,2)->default(0);
            $table->string('sale_type', 20)->comment('Наличные,карта...');
            $table->string('receive', 20)->comment('Самовывоз,доставка...');
            $table->string('address', 255)->nullable();
            $table->integer('zip')->nullable();
            $table->decimal('delivery_price', 8,2)->default(0);
            $table->text('comment')->nullable();
            $table->string('store', 100)->comment('Магазин');
            $table->string('status', 20)->comment('Продано,ожидается...');
//            $table->enum('status', ['process', 'sold', 'refused', 'shipped']);
            $table->dateTime('sale_date')->default(date('Y-m-d H:i:s'));
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
        Schema::dropIfExists('orders');
    }
}
