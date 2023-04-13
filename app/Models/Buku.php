<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'judul_buku',
        'kategori_buku',
        'penerbit_buku',
        'pengarang',
        'tahun_terbit',
        'isbn',
        'id_buku_baik',
        'id_buku_rusak',
        'image',
    ];
}
