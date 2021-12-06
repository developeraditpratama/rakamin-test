<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message
{
    use HasFactory;

    protected $table = 'barang';
    protected $model = App\Models\Barang::class;

    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
        'harga_barang',
        'category_id',
        'keterangan',
    ];
}
