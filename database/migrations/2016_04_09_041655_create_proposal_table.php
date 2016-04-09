<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal', function (Blueprint $table) {
            $table->increments('id_proposal');
            $table->string('nama_pengaju',30);
            $table->string('no_hp',20);
            $table->string('e-mail', 50);
            $table->string('nip/nup', 20);
            $table->string('dosen', 25);
            $table->timestamps('tgl_submit');
            $table->string('kategori', 20);
            $table->string('status', 20);
            $table->string('judul_proposal', 50);
            $table->text('file');
            $table->integer('id_laporan',10);
            $table->integer('id_hibah',10);
            $table->foreign('dosen')->references('username')->on('users');
            $table->foreign('id_hibah')->references('id_hibah')->on('hibah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proposal');
    }
}
