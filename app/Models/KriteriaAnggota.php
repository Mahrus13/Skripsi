<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KriteriaAnggota extends Model
{
  protected $table = 'kriteria_anggota';
  protected $fillable = [
      'kode_kriteria',
      'nama_kriteria',
      'bobot_kriteria',
  ];

  public function SubAnggota()
    {
      return $this->belongsToMany('App\Models\SubAnggota','pivot_anggota','anggota_id','subanggota_id');
    }
}
