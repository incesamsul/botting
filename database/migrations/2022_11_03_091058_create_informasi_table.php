<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi', function (Blueprint $table) {
            $table->increments('id_informasi');
            $table->unsignedBigInteger('id_user');
            // informasi mempelai
            $table->string('foto_mempelai_pria');
            $table->string('nama_mempelai_pria');
            $table->string('nama_ayah_mempelai_pria');
            $table->string('nama_ibu_mempelai_pria');
            $table->string('foto_mempelai_wanita');
            $table->string('nama_mempelai_wanita');
            $table->string('nama_ayah_mempelai_wanita');
            $table->string('nama_ibu_mempelai_wanita');
            // informasi akad dan resepsi
            $table->date('tgl_akad');
            $table->time('jam_akad');
            $table->string('lokasi_akad');
            $table->date('tgl_resepsi');
            $table->time('jam_resepsi');
            $table->string('lokasi_resepsi');
            // info quotes
            $table->string('quotes');
            // info kisah cinta
            $table->string('lokasi_pertama_ketemu');
            $table->string('gambar_pertama_ketemu');
            $table->string('cerita_pertama_ketemu');
            $table->string('lokasi_lamaran');
            $table->string('gambar_lamaran');
            $table->string('cerita_lamaran');
            $table->string('gallery1');
            $table->string('gallery2');
            $table->string('gallery3');
            $table->string('gallery4');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi');
    }
}
