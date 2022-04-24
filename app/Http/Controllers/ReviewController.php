<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempatMakan;
use App\DetailTempat;
use App\Review;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Middleware\Authenticate;

class ReviewController extends Controller
{
    public function store(Request $request, $id){
        $tmpt = TempatMakan::find($id);
        $review = new Review;
        $review->user_id = Auth::user()->id;
        $review->tempat_id = $tmpt->id;
        $review->comment = $request->comment;
        $review->save();
        return back();
    }
}
