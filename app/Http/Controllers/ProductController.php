<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    function banner()
    {
        $data= Banner::all();
        $datas = Product::all();
        $page= Product::paginate(12);
        return view('front_end.index',['banners'=>$data,'products'=>$datas,'pages'=>$page]);

    }
    function detail($id)
    {
        $data= Product::find($id);
        $datas= Product::paginate(3);
        return view('front_end.detail',['product'=>$data, 'products'=>$datas]);
    }
    function search(Request $req)
    {
        // return $req->input();
       $data= Product::where('name','like','%'.$req->input('query').'%')->paginate(12);
       return view('front_end.search',['product'=>$data]);
    }
    function addtocart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/register');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId= Session::get('user')['id'];
        $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        return view('front_end.cartlist',['products'=>$data]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
     function orderNow()
    {
        $userId= Session::get('user')['id'];
        $total= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('front_end.ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId= Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->fname=$req->fname;
            $order->lname=$req->lname;
            $order->street=$req->street;
            $order->city=$req->city;
            $order->district=$req->district;
            $order->zip=$req->zip;
            $order->state=$req->state;
            $order->country=$req->country;
            $order->mobile=$req->mobile;
            $order->email=$req->email;
            $order->status="pending";
            $order->payment_method=$req->payment;
            if($order->payment_method='online')
            {
                $order->payment_status="Done";
            }
            else
            {
                $order->payment_status="pending";
            }
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();
        return redirect('/');
    }
    function myOrder()
    {
        $userId= Session::get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('front_end.myorder',['orders'=>$orders]);
    }
}
