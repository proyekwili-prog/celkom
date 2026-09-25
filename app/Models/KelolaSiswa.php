<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelolaSiswa extends Model
{
    use HasFactory;

    protected $table = 'kelola_siswas'; // Sesuaikan dengan nama tabel di database kamu

    protected $fillable = [
        'nama', 
        'nisn', 
        'kelas'
    ];
}