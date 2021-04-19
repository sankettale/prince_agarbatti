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
                    <li class="active">Edit Product</li>
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
            <div class="card-header"><strong>Edit</strong><small> Product</small></div>
                <div class="card-body card-block">
                    <form action="{{$productss->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{$productss->name}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="price" class=" form-control-label">Price</label>
                                    <input type="number" name="price" id="price"  class="form-control" value="{{$productss->price}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category" class=" form-control-label">Category</label>
                                    <input type="text" name="category" id="category" placeholder="Enter category" class="form-control" value="{{$productss->category}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="file" class=" form-control-label">Image</label>
                                    <input type="file" name="gallery" id="file" class="form-control"><br>
                                    @if($productss->gallery)
                      <img src="{{ URL::to('/')}}/storage/product/{{$productss->gallery}}" style="height:100px; width:100px">
                      @endif
                      <input type="hidden" name="hidden_image" value="{{ $productss->gallery }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="description" class=" form-control-label">Description</label>
                                    <input type="text" name="description" id="description" placeholder="Enter Description" class="form-control" value="{{$productss->description}}">
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
