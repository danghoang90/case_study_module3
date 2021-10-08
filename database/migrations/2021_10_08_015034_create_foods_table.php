<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('image');
            $table->time('open_time');
            $table->time('close_time');
            $table->string('note')->nullable();
            $table->integer('price');
            $table->integer('promotional_price');
            $table->integer('service_price');
            $table->string('explain_service_price');
            $table->unsignedBigInteger('service_price_id')->nullable();
            $table->time('prepare_time');
            $table->string('discount_code')->nullable();
            $table->string('count_discount_code')->nullable();
            $table->string('tag');
            $table->string('views')->nullable();
            $table->string('orders')->nullable();
            $table->string('nominations')->nullable();
            $table->string('discount_food')->nullable();
            $table->string('restaurant')->nullable();
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
        Schema::dropIfExists('foods');
    }
}
