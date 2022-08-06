<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeriodeAnggota extends Model
{
  protected $table = 'periode_anggota';
  protected $fillable = [
      'periode',
  ];
}
