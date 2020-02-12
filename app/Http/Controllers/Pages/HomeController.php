<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function getIndex() {
        $slide1 = DB::select('select * from Slide');
     return view('partials.homepage',compact('slide1'));
    }
}
