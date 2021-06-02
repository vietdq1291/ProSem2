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
            $table->unsignedBigInteger('or_transactions_id');
            $table->foreign('or_transactions_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->unsignedBigInteger('or_product_id');
            $table->foreign('or_product_id')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('or_user_id');
            $table->foreign('or_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('or_price');
            $table->integer('or_price_end');
            $table->integer('or_sale');
            $table->date('or_date');
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
