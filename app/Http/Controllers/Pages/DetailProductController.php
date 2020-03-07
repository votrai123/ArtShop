<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ImageProduct;
use App\Models\TypeProduct;
use Illuminate\Support\Facades\Validator;
use App\Models\CommentProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class DetailProductController extends Controller
{
    //
    public function getDetailproduct(Request $req) {
        $product = Products::where('id',$req->id)->first();
        $relateproduct = Products::where('id_type',$product->id_type)->paginate(4);
        $iproduct = DB::table('products')
                                        ->join('image_product','products.id','=','image_product.id_image')
                                        ->select('image')
                                        ->where('products.id',$req->id)
                                        ->get();
                                        // print_r($iproduct);
                                        // exit();
        $typeproduct = TypeProduct::all();
        $comment = CommentProduct::all();
        // return 1;
        return view('partials.productdetail',compact('product','iproduct','typeproduct','relateproduct','comment'));
    }
    // public function item() {
    //     return view
    // }
}
