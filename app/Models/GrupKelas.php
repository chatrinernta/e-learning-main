<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupKelas extends Model
{
    use HasFactory;

    // Tabel yang digunakan
    protected $table = 'grup_kelas';

    // Kolom yang dapat diisi melalui form
    protected $fillable = [
        'judul',
        'deskripsi',
        'link',
    ];
}
