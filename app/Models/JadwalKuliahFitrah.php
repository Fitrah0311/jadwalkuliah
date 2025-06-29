<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKuliahFitrah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'jurusan'
    ];

    protected $table = 'Jadwal_Kuliah_Fitrahs';
}
