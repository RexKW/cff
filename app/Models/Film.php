<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'kategori',
        'sutradara',
        'produser',
        'penulis',
        'rumah_produksi',
        'penghargaan',
        'trailer',
        'poster',
        'deskripsi',
        'tipe'
    ];
}
