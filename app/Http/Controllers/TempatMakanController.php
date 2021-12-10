<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokasi;
use App\TempatMakan;
use Illuminate\Support\Str;

class TempatMakanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
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
            // 'foto'=>'image|file|max:1024',
        ]); 

        $tmpt_mkn = new TempatMakan;
        $tmpt_mkn->nama_tempat = $request->nama_tempat;
        $tmpt_mkn->id_lokasi = $request->id_lokasi;
        $tmpt_mkn->tempat_makan_seo = Str::slug($request->nama_tempat, '-');
        $tmpt_mkn->foto = $request->file('foto')->store('post-images');
        $tmpt_mkn->save();
        return redirect('/tempat');
        
    }

    public function destroy($id) {
        $tmpt_mkn = TempatMakan::find($id);
        $tmpt_mkn->delete();
        return redirect('/tempat');
    }

    public function edit($id) {
        $tmpt_mkn = TempatMakan::find($id);
        $locs = Lokasi::all();
        return view('tempat.edit', compact('tmpt_mkn', 'locs'));
    }

    public function update(Request $request, $id){
        $tmpt_mkn = TempatMakan::find($id);
        $tmpt_mkn->nama_tempat = $request->nama_tempat;
        $tmpt_mkn->id_lokasi = $request->id_lokasi;
        $tmpt_mkn->tempat_makan_seo = Str::slug($request->nama_tempat, '-');
        $tmpt_mkn->foto = $request->file('foto')->store('post-images');
        $tmpt_mkn->update();
        return redirect('/tempat');
    }
}
