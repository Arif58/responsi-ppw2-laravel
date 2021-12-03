<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Lokasi;
use App\TempatMakan;

class FrontEndController extends Controller
{
    public function index(){
        $location = Lokasi::all();
        return view('frontEnd', compact('location'));
    }

    public function listempat($nama_kota){
        $locs = Lokasi::where('lokasi_seo', $nama_kota)->first();
        $plcs = $locs->locations()->orderBy('id','desc');
        return view('list_tempat.index', compact('locs', 'plcs'));
    
    }
}
