<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenilaianAnggota extends Model
{
    protected $table = 'penilaian_anggota';
    protected $fillable = [
        'alternatif_id',
        'user_id',
        'nilai_1',
        'nilai_2',
        'nilai_3',
        'nilai_4'
    ];
}
