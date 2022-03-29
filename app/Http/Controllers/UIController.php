<?php

namespace App\Http\Controllers;

use App\Models\ProductAutoPartModel;
use App\Models\ProductCartModel;
use App\Models\ProductsModel;
use App\Models\SubCategoriesModel;
use Illuminate\Http\Request;
use PDO;

class UIController extends Controller
{
    //
    public function home()
    {
        $subcategories = SubCategoriesModel::orderBy('title','ASC')->get();
        return view('index',compact('subcategories'));
    }

    public function about_us()
    {
        return view('about-us');
    }



    public function our_service()
    {
        return view('our-service');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function privacy_policy()
    {
        return view('privacy-policy');
    }


    public function legel_disclaimer()
    {
        return view('legel-disclaimer');
    }
    public function compare()
    {
        return view('compare');
    }


    public function auto_parts_product($id)
    {
        $autopart_details = ProductAutoPartModel::with('get_product.images')->where('id',$id)->first();
        return view('auto-parts-product',compact('autopart_details'));
    }


    public function auto_parts()
    {
        $autoparts = ProductAutoPartModel::with('get_product.images_take1')->orderby('id','desc')->get();
        return view('auto-parts',compact('autoparts'));
    }

    public function cars_product($id)
    {

        $autopart_details = ProductAutoPartModel::with('get_product.images')->where('id',$id)->first();
        return view('cars-product',compact('autopart_details'));
    }


    public function cars()
    {
        $cars = ProductCartModel::with('get_product.images_take1')->orderby('id','desc')->get();
        // dd($cars);
        return view('cars',compact('cars'));
    }

    public function addToCart(Request $request)
    {
        $id=$request->product_id;
        $quantity = $request->quantity;

        if($quantity == null)
        {
            $quantity = 1;
        }

        $check = ProductsModel::where('id', $id)->first();
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $chesckSession= session()->get('cart')[$id]['quantity'];
            if($check->stock > $chesckSession)
            {
                $cart[$id]['quantity'] += $quantity;
            } else
            {
                return response()->json([
                    'status' => 1,
                    'data' => $request,
                    'count'=> session()->has('cart') ? count(session()->get('cart')) : 0,
                    'msg' =>  'Product is Out of Stock'
                ]);
            }
        } else {
            if($check->stock >= 0)
            {
                $cart[$id] = [
                    "id" => $id,
                    "quantity" => $quantity,
                    "arrayCount" => 1,
                ];
            }
        }
        session()->put('cart', $cart);
        return response()->json([
            'status' => 1,
            'data' => $request,
            'count'=> session()->has('cart') ? count(session()->get('cart')) : 0,
            'msg' =>  'Product has been added Successfully'
        ]);

    }

    public function my_order()
    {
        return view('my-order');
    }

}
