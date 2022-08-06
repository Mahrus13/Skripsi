<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubAnggota extends Model
{
  protected $table = 'sub_kriteria_anggota';
  protected $fillable = [
      'sub_kriteria',
      'nilai',
      'keterangan',
  ];
}
