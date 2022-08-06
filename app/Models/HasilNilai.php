<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilNilai extends Model
{
  protected $table = 'hasil_penilaian_ketua';
  protected $fillable = [
      'nama_alternatif',
      'nilai_1',
      'nilai_2',
      'nilai_3',
      'nilai_4',
      'nilai_5',
      'nilai_6',
      'nilai_7',
      'nilai_8',
  ];
}
