<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlternatifKetua extends Model
{
  protected $table = 'alternatif_ketua';
  protected $fillable = [
      'kode_alternatif',
      'nama_alternatif',
      't_alternatif',
      'tl_alternatif',
      'alamat_alternatif',
      'telp_alternatif',
      'jk_alternatif',
      'pendidikan_alternatif',
    ];
}
