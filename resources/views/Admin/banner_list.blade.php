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
                    <li class="active">Banner Data table</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Banner Data Table</strong>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Gallery</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{asset('storage/banner/'.$item->gallery )}}" style="height:100px"></td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a href="edit_banner/{{$item['id']}}"><i class="fa fa-edit"></i></a></td>
                                    <td><a href="delete_banner/{{$item['id']}}" class=""><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection
