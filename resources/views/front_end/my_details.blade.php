@extends('front_end.common_page.main')
@section('content')
<div id="all">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">My account</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
            <!--
            *** CUSTOMER MENU ***
            _________________________________________________________
            -->
            <div class="card sidebar-menu">
              <div class="card-header">
                <h3 class="h4 card-title">Customer section</h3>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills flex-column"><a href="myorder" class="nav-link active"><i class="fa fa-list"></i> My orders</a><a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a><a href="my_details" class="nav-link"><i class="fa fa-user"></i> My account</a><a href="/logout" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></ul>
              </div>
            </div>
            <!-- /.col-lg-3-->
            <!-- *** CUSTOMER MENU END ***-->
          </div>
          <div class="col-lg-9">
            <div class="box">
              <h1>My account</h1>
              <p class="lead">Change your personal details or your password here.</p>
              <h3>Change password</h3>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_old">Old password</label>
                      <input id="password_old" type="password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_1">New password</label>
                      <input id="password_1" type="password" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_2">Retype new password</label>
                      <input id="password_2" type="password" class="form-control">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save new password</button>
                </div>
              </form>
              <h3 class="mt-5">Personal details</h3>
              <form action="" method="POST">
                  @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstname">Firstname</label>
                      <input id="firstname" name="name" type="text" class="form-control" value="{{$users->fname}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname">Lastname</label>
                      <input id="lastname" type="text" class="form-control" value="{{$users->lname}}">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="company">H.No/Street/Area</label>
                      <input id="company" type="text" class="form-control" value="{{$users->street}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="street">City</label>
                      <input id="street" type="text" class="form-control" value="{{$users->city}}">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="city">district</label>
                      <input id="city" type="text" class="form-control" value="{{$users->district}}">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="zip">ZIP</label>
                      <input id="zip" type="text" class="form-control" value="{{$users->zip}}">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="state">State</label>
                      <select id="state" class="form-control">
                          <option value="value="{{$users->state}}"">{{$users->state}}</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="country">Country</label>
                      <select id="country" class="form-control">
                          <option value="{{$users->country}}">{{$users->fname}}</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Telephone</label>
                      <input id="phone" type="text" class="form-control" value="{{$users->mobile}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="text" class="form-control" value="{{$users->email}}">
                    </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
