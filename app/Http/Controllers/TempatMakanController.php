<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokasi;
use App\TempatMakan;
use Illuminate\Support\Str;

class TempatMakanController extends Controller
{
    public function index(){
        $batas = 5;
        $tmpt_mkn = TempatMakan::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($tmpt_mkn->currentPage() - 1);
        return view('tempat.index', compact('tmpt_mkn', 'no'));
    }

    public function create(){
        $location = Lokasi::all();
        return view('tempat.create', compact('location'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_tempat'=>'required',
            'id_lokasi'=>'required',
            'no_telp'=>'required',
            'waktu_operasional'=>'required',
            // 'foto'=>'image|file|max:1024',
        ]); 

        $tmpt_mkn = new TempatMakan;
        $tmpt_mkn->nama_tempat = $request->nama_tempat;
        $tmpt_mkn->no_telp = $request->no_telp;
        $tmpt_mkn->waktu_operasional = $request->waktu_operasional;
        $tmpt_mkn->id_lokasi = $request->id_lokasi;
        $tmpt_mkn->tempat_makan_seo = Str::slug($request->nama_tempat, '-');
        $tmpt_mkn->foto = $request->file('foto')->store('post-images');
        $tmpt_mkn->save();
        return redirect('/tempat');
        
    }
}
