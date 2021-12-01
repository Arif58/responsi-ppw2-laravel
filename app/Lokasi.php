<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';

    public function places(){
        return $this->hasMany('App\TempatMakan', 'id_lokasi', 'id');
    }
}
