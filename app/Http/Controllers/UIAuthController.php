<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UIAuthController extends Controller
{
    //
    public function login()
    {
        return view('log-in');
    }

    public function ui_login_data(Request $req)
    {
        if(!empty($req->email)&&!empty($req->password)){
            $userfind=User::where('email',$req->email)->first();
            if($userfind){
                /*means found user*/
                if(Hash::check($req->password,$userfind->password)){
                    /*matched password*/
                    if($userfind->user_role == 2){
                        /**For User*/
                        Auth::login($userfind);
                        return redirect()->route('UI_home');
                    }else{
                        return back()->with('failed','Not a user? Kindly login from vendor login page');
                    }
                    /*matched password end*/
                }else{
                    return redirect()->back()->with('failed','Password is incorrect')->with('email',$req->email);
                }
                /*means found user end*/
            }else{
                return redirect()->back()->with('failed','Email not found');
            }
        }else{
            return redirect()->back()->with('failed','Please fill required fields');
        }
    }

    public function sign_up()
    {
        return view('sign-up');
    }
    public function ui_sign_up(User $user,Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'email'=>'required|email|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:6',
            'phone_number' => 'required|max:255',
        ]);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone_number;
        $user->user_role = 2;
        $user->save();
//        Auth::login($user);
        return redirect()->route('UI_home')->with('success','Successfully Signed Up');
    }



    public function change_password()
    {
        return view('change-password');
    }
    public function my_profile()
    {
        return view('my-profile');
    }

    public function logout ()
    {
        Auth::logout(auth()->user());
        return back();
    }

}
