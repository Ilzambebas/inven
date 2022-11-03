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
        Schema::create('barang_return_layak_pakai', function (Blueprint $table) {
            $table->id();
            $table->integer('id_barang_return_layak_pakai');
            $table->integer('id_user');
            $table->string('deskripsi_barang')->nullable();
            $table->string('nopo_barang')->nullable();
            $table->string('nama_pic_barang')->nullable();
            $table->integer('jumlah_barang_return_layak_pakai')->nullable();
            $table->string('satuan_barang')->nullable();
            $table->string('keperluan_barang')->nullable();
            $table->date('tgl_bon_barang')->nullable();
            $table->string('lokasi_barang')->nullable();

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
        Schema::dropIfExists('barang_return_layak_pakai');
    }
};
