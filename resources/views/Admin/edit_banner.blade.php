<?php
use App\Http\Controllers\AdminController;
if(!Session::has('admin'))
{
    echo '<script type="text/javascript">
        window.location = "/adminlogin"
        </script>';
}
?>
@extends('Admin.common_page.main')
@section('content')
{{-- Breadcrumb --}}
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="dashboard">Dashboard</a></li>
                    <li class="active">Edit Banner</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- //Breadcrumb --}}

{{-- From --}}
<div class="container">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Edit</strong><small> Banner</small></div>
                <div class="card-body card-block">
                    <form action="{{$banners->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" value="{{$banners->name}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="file" class=" form-control-label">Image</label>
                                    <input type="file" name="gallery" id="file" class="form-control"><br>
                                    @if($banners->gallery)
                      <img src="{{ URL::to('/')}}/storage/banner/{{$banners->gallery}}" style="height:100px">
                      @endif
                      <input type="hidden" name="hidden_image" value="{{ $banners->gallery }}">
                                </div>
                            </div>
                            <div class="col-12 text-right">
                                <button class="btn btn-danger" type="reset">Reset</button>
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- //From --}}
@endsection
