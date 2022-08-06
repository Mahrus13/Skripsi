<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotKetua extends Model
{
  protected $table = 'pivot_ketua';
  protected $fillable = [
      'ketua_id',
      'subketua_id'
  ];
}
