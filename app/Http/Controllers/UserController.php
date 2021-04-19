<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    //
    function register(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->mobile=$req->mobile;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/register');
    }
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or Password is Not Matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function my_details()
    {
        $data = Order::all()->first();
        return view('front_end.my_details',['users'=>$data]);
    }

    function showcount()
    {
        $collection = DB::table('users')->count();
        $collect = DB::table('products')->count();
        // dd($collection);
        return view('admin.dashboard',compact('collection','collect'));
    }
}
