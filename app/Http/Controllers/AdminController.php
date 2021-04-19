<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function adminregister(Request $req)
    {
        $admin= new Admin;
        $admin->name=$req->name;
        $admin->email=$req->email;
        $admin->password=Hash::make($req->password);
        $admin->save();
        return redirect('/adminlogin');
    }
    function adminlogin(Request $req)
    {
        $admin= Admin::where(['email'=>$req->email])->first();
        if(!$admin || !Hash::check($req->password,$admin->password))
        {
            return "Username or Password is Not Matched";
        }
        else{
            $req->session()->put('admin',$admin);
            return redirect('/dashboard');
        }
    }

    function setting()
    {
        return view('admin.setting');
    }
    function updatesetting(Request $req)
    {
        $input_data= array(
            'old_password'=>$req->old_password,
            'new_password'=>$req->new_password,
            'con_password'=>$req->con_password,
        );
        // $this->validate($req,[
        //     'old_password'=>'required',
        //     'new_password'=>'required|confirmed'
        // ]);
        $adminpassword = Session::get('admin')['password'];
        if(Hash::check($req->old_password,$adminpassword))
        {
            $admin = Admin::find(Session::get('admin')['id']);
            $admin->password = Hash::make($req->password);
            $admin->save();
            return redirect('dashboard');
        }
    }

}
