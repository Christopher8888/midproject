<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['judul_buku', 'penulis_buku', 'jumlah_halaman', 'tahun_terbit'];
}
