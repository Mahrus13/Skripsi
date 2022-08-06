<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubKetua extends Model
{
  protected $table = 'sub_kriteria_ketua';
  protected $fillable = [
      'sub_kriteria',
      'nilai',
      'keterangan',
  ];
}
