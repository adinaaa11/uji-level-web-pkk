<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;


    protected $table = 'keranjang'; // Nama tabel di database
    protected $fillable = ['id_produk', 'nama_produk', 'harga', 'jumlah'];
}
