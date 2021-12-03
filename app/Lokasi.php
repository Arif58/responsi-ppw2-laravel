<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';

    public function locations(){
        return $this->hasMany('App\TempatMakan', 'id_lokasi', 'id');
    }
}
