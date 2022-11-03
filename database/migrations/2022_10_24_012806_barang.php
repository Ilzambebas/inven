<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->integer('id');
            $table->integer('id_user');
            $table->string('deskripsi_barang')->nullable();
            $table->string('nopo_barang')->nullable();
            $table->string('nama_pic_barang')->nullable();
            $table->integer('jumlah_barang')->nullable();
            $table->string('satuan_barang')->nullable();
            $table->string('keperluan_barang')->nullable();
            $table->date('tgl_bon_barang')->nullable();
            $table->string('lokasi_barang')->nullable();
            $table->string('nopekerjaan_barang')->nullable();
            $table->string('bidang_barang')->nullable();
            $table->string('nobon_barang')->nullable();
            $table->string('status_barang')->nullable();
            $table->string('jenis_barang')->nullable();

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
        Schema::dropIfExists('barang');
    }
};
