<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function getIndex() {
        $slide1 = DB::select('select * from Slide');
        $category = Category::all();
        $new_product = DB::select('select * from Products where ProNew in (1)');
     return view('partials.homepage',compact('slide1','new_product','category'));
    // return $category;
    }
}
