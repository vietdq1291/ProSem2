<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_details', function (Blueprint $table) {
            $table->id();
            $table->char('pd_name',225);
            $table->unsignedBigInteger('pd_promotion_id');
            $table->foreign('pd_promotion_id')->references('id')->on('promotions')->onDelete('cascade');
            $table->unsignedBigInteger('pd_product_id');
            $table->foreign('pd_product_id')->references('id')->on('products')->onDelete('cascade');
            $table->date('pd_date_start');
            $table->date('pd_date_end');
            $table->integer('pd_number');
            $table->string('pd_apply');
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
        Schema::dropIfExists('promotion_details');
    }
}
