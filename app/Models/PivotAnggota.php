<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotAnggota extends Model
{
  protected $table = 'pivot_anggota';
  protected $fillable = [
      'anggota_id',
      'subanggota_id'
  ];
}
