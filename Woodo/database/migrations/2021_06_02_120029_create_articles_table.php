<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->char('ar_name',225);
            $table->string('ar_description');
            $table->text('ar_content');
            $table->unsignedBigInteger('ar_category_id');
            $table->foreign('ar_category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('ar_author_id');
            $table->foreign('ar_author_id')->references('id')->on('admins')->onDelete('cascade');
            $table->char('ar_title',225);
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
        Schema::dropIfExists('articles');
    }
}
