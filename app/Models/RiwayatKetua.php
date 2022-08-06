<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatKetua extends Model
{
  protected $table = 'riwayat_penilaian_ketua';
  protected $fillable = [
      'periode_id',
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
