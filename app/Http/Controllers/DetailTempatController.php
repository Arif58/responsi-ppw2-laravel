<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailTempat;
use App\TempatMakan;
use App\Lokasi;
use App\Http\Controllers\Middleware\Authenticate;

class DetailTempatController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index(){
        $batas = 7;
        $detail = DetailTempat::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($detail->currentPage() - 1);
        return view('detail_tempat.index', compact('detail', 'no'));
    }

    public function create(){
        // $tmpt = TempatMakan::all();
        $kota = Lokasi::pluck("nama_kota", "id");
        return view('detail_tempat.create', compact('kota'));
    }

    // public function getKota(){

    //     return view('detail_tempat.create', compact('kota'));
    // }

    public function getTempat($id){
        $tempat = TempatMakan::where("id_lokasi", $id)->pluck("nama_tempat", "id");
        return json_encode($tempat);
    }

    public function store(Request $request){
        // $this->validate($request,[
        //     'id_tempat'=>'required',
        // ]); 

        $detail = new DetailTempat;
        $detail->id_kota = $request->id_kota;
        $detail->id_tempat = $request->id_tempat;
        $detail->no_telp = $request->no_telp;
        $detail->waktu_operasional = $request->waktu_operasional;
        $detail->alamat = $request->alamat;
        $detail->link_maps = $request->link_maps;
        $detail->menu = $request->file('menu')->store('post-images');
        $detail->save();
        return redirect('/detail_tempat');
        
    }

    public function view($id) {
        $detail = DetailTempat::find($id);
        return view('detail_tempat.view', compact('detail'));
    }

    public function destroy($id) {
        $detail = DetailTempat::find($id);
        $detail->delete();
        return redirect('/detail_tempat');
    }

    public function edit($id) {
        $detail = DetailTempat::find($id);
        $kota = Lokasi::pluck("nama_kota", "id");
        $tempat = TempatMakan::where("id_lokasi", $id)->pluck("nama_tempat", "id");
        return view('detail_tempat.edit', compact('detail', 'kota', 'tempat'));
    }   


}
