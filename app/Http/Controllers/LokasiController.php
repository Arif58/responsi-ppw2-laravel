<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Lokasi;

class LokasiController extends Controller
{
    public function index(){
        $batas = 7;
        $location = Lokasi::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($location->currentPage() - 1);
        return view('lokasi.index', compact('location', 'no'));
    }

    public function create(){
        return view('lokasi.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'nama_kota'=>'required',
            // 'foto'=>'image|file|max:1024',
        ]);

        $location = new Lokasi;
        $location->nama_kota = $request->nama_kota;
        $location->foto = $request->file('foto')->store('post-images');
        $location->lokasi_seo = Str::slug($request->nama_kota, '-');
        $location->save();
        return redirect('/lokasi');
        
    }

    public function destroy($id) {
        $location = Lokasi::find($id);
        $location->delete();
        return redirect('/lokasi');
    }

    public function edit($id) {
        $location = Lokasi::find($id);
        return view('lokasi.edit', compact('location'));
    }

    public function update(Request $request, $id){
        $location = Lokasi::find($id);
        $location->nama_kota = $request->nama_kota;
        $location->foto = $request->file('foto')->store('post-images');
        $location->lokasi_seo = Str::slug($request->nama_kota, '-');
        $location->update();
        return redirect('/lokasi');
    }


}
