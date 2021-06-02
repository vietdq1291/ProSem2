<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pr_name');
            $table->unsignedBigInteger('pr_categories_id');
            $table->foreign('pr_categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('pr_price');
            $table->unsignedBigInteger('pr_author_id');
            $table->foreign('pr_author_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('pr_sppier_id');
            $table->foreign('pr_sppier_id')->references('id')->on('sppliers')->onDelete('cascade');
            $table->integer('pr_sale');
            $table->integer('pr_number');
            $table->date('pr_date');
            $table->string('pr_description');
            $table->char('pr_keyword',225);
            $table->char('pr_new',225);
            $table->string('pr_hot');
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
        Schema::dropIfExists('products');
    }
}
