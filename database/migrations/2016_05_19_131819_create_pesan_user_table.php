<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_user', function (Blueprint $table) {
            $table->integer('id_pengirim')->unsigned();
            $table->increments('id');
            $table->integer('penerima')->unsigned();
            $table->boolean('isread');
            $table->string('subjek', 30);
            $table->text('pesan');
            $table->timestamps();
            $table->text('file')->nullable();
            $table->foreign('id_pengirim')->references('id')->on('users');
            $table->foreign('penerima')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pesan_user');
    }
}
