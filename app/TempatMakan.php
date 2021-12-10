<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatMakan extends Model
{
    protected $table = 'tempat_makan';

    public function places(){
        return $this->belongsTo('App\Lokasi', 'id_lokasi', 'id');
    }

    public function detailtempat(){
        return $this->hasMany('App\DetailTempat', 'id_tempat', 'id');
    }
}
