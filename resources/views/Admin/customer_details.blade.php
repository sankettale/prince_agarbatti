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
                    <li class="active">Customer Data table</li>
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
                        <strong class="card-title">Customer Data Table</strong>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Id</th>
                                    <th>User Id</th>
                                    <th>full Name</th>
                                    <th>Last Name</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>District</th>
                                    <th>Zip</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Payment Method</th>
                                    <th>Payment Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->product_id}}</td>
                                    <td>{{$item->user_id}}</td>
                                    <td>{{$item->fname}}</td>
                                    <td>{{$item->lname}}</td>
                                    <td>{{$item->street}}</td>
                                    <td>{{$item->city}}</td>
                                    <td>{{$item->district}}</td>
                                    <td>{{$item->zip}}</td>
                                    <td>{{$item->state}}</td>
                                    <td>{{$item->country}}</td>
                                    <td>{{$item->mobile}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->payment_method}}</td>
                                    <td>{{$item->payment_status}}</td>
                                    {{-- <td><img src="{{asset('storage/banner/'.$item->gallery )}}" style="height:100px"></td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td> --}}
                                    <td><a href="edit_banner/{{$item['id']}}"><i class="fa fa-edit"></i></a></td>
                                    {{-- <td><a href="delete_banner/{{$item['id']}}" class=""><i class="fa fa-trash"></i></a> --}}
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

