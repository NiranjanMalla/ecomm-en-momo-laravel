<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;

use Illuminate\Contracts\Session\Session as SessionSession;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        // return Product::find($id);
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    //HAVENOT DONE ON THE HOME PAGE...DO IT LATER,,,
    function search(Request $req)
    {
        $data = Product::where('name','like','%',$req->input('query','%'))->get();
        return view('search',['products'=>$data]);
    }

    function addToCart( Request $req )
    {
        if($req->session()->has('user'))
        {
            $cart= new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect("/");
            // return "Hello";
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartitem()
    {
        $userId=Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }

//     function cartitem()
// {
//     $userId = Session::get('user')['id'] ?? null;

//     if ($userId !== null) {
//         return cart::where('user_id', $userId)->count();
//     } else {
//         return 0; // or handle the case where the user is not logged in
//     }
// }


}
