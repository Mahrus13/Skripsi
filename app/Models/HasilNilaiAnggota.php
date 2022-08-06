<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilNilaiAnggota extends Model
{
  protected $table = 'hasil_penilaian_anggota';
  protected $fillable = [
      'nama_alternatif',
      'nilai_1',
      'nilai_2',
      'nilai_3',
      'nilai_4'
  ];
}
