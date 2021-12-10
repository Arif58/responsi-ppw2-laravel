<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTempat extends Model
{
    protected $table = 'detail_tempat';

    public function details(){
        return $this->belongsTo('App\TempatMakan', 'id_tempat', 'id');
    }

    public function loct(){
        return $this->belongsTo('App\Lokasi', 'id_kota', 'id');
    }


}
