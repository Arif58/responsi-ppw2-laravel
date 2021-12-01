<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatMakan extends Model
{
    protected $table = 'tempat_makan';

    public function locations(){
        return $this->belongsTo('App\Lokasi', 'id_lokasi', 'id');
    }
}
