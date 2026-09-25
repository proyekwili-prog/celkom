<?php

namespace App\Models;

use Illuminate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaGuru extends Model
{
   

    protected $table = 'kelola_gurus';

    protected $fillable = [
        'nama',
        'nip',
        'mata_pelajaran',
        'jabatan',
        'jenis',
        'foto',
    ];
}