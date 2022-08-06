<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenilaianKetua extends Model
{
  protected $table = 'penilaian_ketua';
  protected $fillable = [
      'alternatif_id',
      'user_id',
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
