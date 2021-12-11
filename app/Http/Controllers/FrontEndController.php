<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Lokasi;
use App\TempatMakan;
use App\DetailTempat;
use App\Review;

class FrontEndController extends Controller
{
    public function index(){
        $location = Lokasi::orderBy('id', 'desc')->get();
        return view('frontEnd', compact('location'));
    }

    public function listempat($nama_kota){
        $locs = Lokasi::where('lokasi_seo', $nama_kota)->first();
        $plcs = $locs->locations()->orderBy('id', 'desc')->get();
        return view('list_tempat.index', compact('locs', 'plcs'));
    
    }
    public function detailtmpt($nama_tempat){
        $tmpt = TempatMakan::where('tempat_makan_seo', $nama_tempat)->first();
        $ket = $tmpt->detailtempat()->orderBy('id', 'desc')->get();
        $review = Review::where('tempat_id', $tmpt->id)->orderBy('id', 'desc')->get();
        return view('frontEnd_detailtmpt.index', compact('tmpt', 'ket', 'review'));
    
    }




}
