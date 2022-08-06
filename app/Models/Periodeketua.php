<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodeketua extends Model
{
  protected $table = 'periode_ketua';
  protected $fillable = [
      'periode',
  ];
}
