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
        $new_product1 = DB::select('select * from Products where ProNew in (1) AND id < 4');
        $new_product2 = DB::select('select * from Products where ProNew in (1) AND id > 50 AND id < 54');
        $new_product3 = DB::select('select * from Products where ProNew in (1) AND id > 20 AND id < 24');
        $bestsell1 = DB::select('SELECT * FROM products WHERE NumLike > 50 AND NumLike < 54');
        $bestsell2 = DB::select('SELECT * FROM products WHERE NumLike > 82 AND NumLike < 85');
        $bestsell3 = DB::select('SELECT * FROM products WHERE NumLike = 87');
        $lip = DB::select('SELECT * FROM products pd JOIN type_product tp ON pd.id_type=tp.id WHERE tp.id_category=1');
        $face = DB::select('SELECT * FROM products pd JOIN type_product tp ON pd.id_type=tp.id WHERE tp.id_category=2');
        $cheek = DB::select('SELECT * FROM products pd JOIN type_product tp ON pd.id_type=tp.id WHERE tp.id_category=3');
        $eye = DB::select('SELECT * FROM products pd JOIN type_product tp ON pd.id_type=tp.id WHERE tp.id_category=4');
        $skincare = DB::select('SELECT * FROM products pd JOIN type_product tp ON pd.id_type=tp.id WHERE tp.id_category=5');
        $bosp3ce = DB::select('SELECT * FROM products pd JOIN type_product tp ON pd.id_type=tp.id WHERE tp.id_category=6');
     return view('partials.homepage',compact('slide1','new_product1','new_product2','new_product3','bosp3ce','skincare','eye','cheek','lip','face','category','bestsell1','bestsell2','bestsell3'));
    // return $category;
    }
}
