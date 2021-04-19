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
                    <li class="active">Add Products</li>
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
            <div class="card-header"><strong>Add</strong><small> Products</small></div>
                <div class="card-body card-block">
                    <form action="add_product" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="price" class=" form-control-label">Price</label>
                                    <input type="number" name="price" id="price" placeholder="Enter Price" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category" class=" form-control-label">Category</label>
                                    <input type="text" name="category" id="category" placeholder="Enter category" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="file" class=" form-control-label">Image</label>
                                    <input type="file" name="gallery" id="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="description" class=" form-control-label">Description</label>
                                    <input type="text" name="description" id="description" placeholder="Enter Description" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 text-right">
                                <button class="btn btn-danger" type="reset">Reset</button>
                                <button class="btn btn-success" type="submit">Add</button>
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
