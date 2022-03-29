<?php

namespace App\Http\Controllers;

use App\Models\ProductAutoPartModel;
use App\Models\ProductsModel;
use App\Models\SubCategoriesModel;
use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class UICartController extends Controller
{

    public function cart(){

        return view('cart');
    }


    public function billing_details(){

        return view('billing-details');
    }

    public function post_billing_details(Request $request){

        $billing1 = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name' => 'required',
            'country' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'town' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'notes' => 'required',
        ]);
        $user_id = User::where('email' , $billing1['email'])->fisrt();
        $billing = [
            'first_name' => $billing1['first_name'],
            'last_name' => $billing1['last_name'],
            'company_name' => $billing1['company_name'],
            'country' => $billing1['country'],
            'billing_address1' => $billing1['address1'],
            'billing_address2' => $billing1['address2'],
            'town' => $billing1['town'],
            'zip_code' => $billing1['zip_code'],
            'phone' => $billing1['phone'],
            'email' => $billing1['email'],
            'notes' => $billing1['notes'],
        ];


        session()->put('billing' , $billing);




        return redirect()->route('ui_shipping_details');
    }
    public function shipping_details(){

        return view('shipping-details');
    }
    public function post_shipping_details(Request $request){

        $shipping1 = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name' => 'required',
            'country' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'town' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'notes' => 'required',
        ]);

        $user_id = User::where('email' , $shipping1['email'])->fisrt();

        $shipping = [
            'user_id' => $user_id->id,
            'first_name' => $shipping1['first_name'],
            'last_name' => $shipping1['last_name'],
            'company_name' => $shipping1['company_name'],
            'country' => $shipping1['country'],
            'shipping_address1' => $shipping1['address1'],
            'shipping_address2' => $shipping1['address2'],
            'town' => $shipping1['town'],
            'zip_code' => $shipping1['zip_code'],
            'phone' => $shipping1['phone'],
            'email' => $shipping1['email'],
            'notes' => $shipping1['notes'],
        ];


        session()->put('shipping' , $shipping);


        return redirect()->route('ui_cart_details');
    }
    public function cart_details(){
        dd(session()->get('billing') , session()->get('shipping') );
        return view('cart-details');
    }

}
