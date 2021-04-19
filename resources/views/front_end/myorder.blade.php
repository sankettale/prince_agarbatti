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
                <li aria-current="page" class="breadcrumb-item"><a href="#">My orders</a></li>
                {{-- <li aria-current="page" class="breadcrumb-item active">Order # 1735</li> --}}
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
                <ul class="nav nav-pills flex-column"><a href="/myorder" class="nav-link active"><i class="fa fa-list"></i> My orders</a><a href="/" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a><a href="my_details" class="nav-link"><i class="fa fa-user"></i> My account</a><a href="/logout" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></ul>
              </div>
            </div>
            <!-- /.col-lg-3-->
            <!-- *** CUSTOMER MENU END ***-->
          </div>
          <div id="customer-order" class="col-lg-9">
            <div class="box">
                {{-- @foreach ($orders as $item) --}}
              {{-- <a href="#"><h1>{{$item->fname}} {{$item->lname}}</h1> --}}
                <h1>{{Session::get('user')['name']}}</h1>
              {{-- <p class="lead">Order #1735 was placed on <strong>22/06/2013</strong> and is currently <strong>Being prepared</strong>.</p> --}}
              <p class="text-muted">If you have any questions, please feel free to <a href="/contact">contact us</a>, our customer service center is working for you 24/7.</p>
              <hr>
              <div class="table-responsive mb-4">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Product</th>
                      <th></th>
                      <th>Unit price</th>
                      <th>Delivery Charges</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $item)
                    <tr>
                      <td><a href="#"><img src="{{asset('storage/product/'.$item->gallery )}}" alt="White Blouse Armani"></a></td>
                      <td><a href="#">{{$item->name}}</a></td>
                      <td></td>
                      <td>Rs {{$item->price}}</td>
                      <td>Rs 0.00</td>
                      <td>Rs {{$item->price}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive-->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
