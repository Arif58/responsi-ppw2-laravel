<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Lokasi;
class FrontEndController extends Controller
{
    public function index(){
        $location = Lokasi::all();
        return view('frontEnd', compact('location'));
    }
}
