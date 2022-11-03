<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'id_barang',
        'deskripsi_barang',
        'nopo_barang',
        'nama_pic_barang',
        'jumlah_barang',
        'satuan_barang',
        'keperluan_barang',
        'tgl_bon_barang',
        'lokasi_barang',
        'nopekerjaan_barang',
        'bidang_barang',
        'nobon_barang',
        'status_barang',
        'jenis_barang',
        'created_at',
        'updated_at',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
