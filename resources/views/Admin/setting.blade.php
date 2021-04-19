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
                    <li class="active">Change Password</li>
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
            <div class="card-header"><strong>Change</strong><small> Password</small></div>
                <div class="card-body card-block">
                    <form action="/updatesetting" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="old_password" class=" form-control-label">Old Password </label>
                                    <input type="password" name="old_password" id="old_password" placeholder="Enter Old Password" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="new_password" class=" form-control-label">New Password</label>
                                    <input type="password" name="new_password" placeholder="Enter New Password" id="new_password" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="con_password" class=" form-control-label">Confirm Password</label>
                                    <input type="password" name="con_password" placeholder="Enter Confirm Password" id="con_password" class="form-control">
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
