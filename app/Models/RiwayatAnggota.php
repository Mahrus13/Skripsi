<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatAnggota extends Model
{
  protected $table = 'riwayat_penilaian_anggota';
  protected $fillable = [
      'periode_id',
      'nama_alternatif',
      'nilai_1',
      'nilai_2',
      'nilai_3',
      'nilai_4'
  ];
}
