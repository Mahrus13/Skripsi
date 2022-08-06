<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KriteriaKetua extends Model
{
  protected $table = 'kriteria_ketua';
  protected $fillable = [
      'kode_kriteria',
      'nama_kriteria',
      'bobot_kriteria',
  ];
  
  public function SubKetua()
    {
    	// return $this->belongsToMany('App\Models\SubKetua');
      return $this->belongsToMany('App\Models\SubKetua','pivot_ketua','ketua_id','subketua_id');
    }
}
