<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Banner::all();
        return view('admin.banner_list',['banners'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file('gallery');
        $image_name=rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/banner/'), $image_name);
        $input_data = array (
            'name' => $request->name,
            'gallery' => $image_name,
        );
        Banner::create($input_data);
        return redirect('banner_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Banner::find($id);
        return view('admin.edit_banner',['banners'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('gallery');
        if($image != '')
        {

            $image_name=rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/banner/'),$image_name);
        }

        $input_data= array(
            "name" => $request->name,
            "gallery" => $image_name,
        );
        Banner::whereId($id)->update($input_data);
        return redirect ('banner_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Banner::find($id);
        $data->delete();
        return redirect('banner_list');
    }
}
