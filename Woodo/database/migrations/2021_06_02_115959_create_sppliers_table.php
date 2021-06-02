<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sppliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sp_author_id');
            $table->foreign('sp_author_id')->references('id')->on('admins')->onDelete('cascade');
            $table->char('sp_name',225);
            $table->string('sp_mail');
            $table->char('sp_phone',225);
            $table->char('sp_wed',225);
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
        Schema::dropIfExists('sppliers');
    }
}
