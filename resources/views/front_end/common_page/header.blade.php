<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total=ProductController::cartItem();
}
?>
<!-- navbar-->
<header class="header mb-5">
    <!--
    *** TOPBAR ***
    _________________________________________________________
    -->
    <div id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Prince Incense Stick</a><a href="#" class="ml-1">Smell To Enlight Your Senses !!!</a></div>
          <div class="col-lg-6 text-center text-lg-right">
            <ul class="menu list-inline mb-0">
                @if(Session::has('user'))
              <li class="list-inline-item"><a href="#">{{Session::get('user')['name']}}</a></li>
              <li class="list-inline-item"><a href="/logout">Logout</a></li>
              @else
              <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
              <li class="list-inline-item"><a href="/register">Register</a></li>
              {{-- <li class="list-inline-item"><a href="#">Recently viewed</a></li> --}}
              @endif
              <li class="list-inline-item"><a href="/contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Customer login</h5>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="login" method="post">
                  @csrf
                <div class="form-group">
                  <input id="email-modal" type="text" name="email" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password-modal" type="password" name="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="/register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- *** TOP BAR END ***-->


    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container"><a href="/" class="navbar-brand home">
          <img src="{{ URL::asset('asset/img/logop.png')}}" alt="Obaju logo" class="d-none d-md-inline-block">
          <img src="{{ URL::asset('asset/img/small_logoo.jpg')}}" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span>
        </a>
        <div class="navbar-buttons">
          <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
          <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div id="navigation" class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Black Agarbatti<b class="caret"></b></a>
              <ul class="dropdown-menu megamenu">
                <li>
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <h5>Clothing</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Shoes</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Accessories</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Featured</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                      </ul>
                      <h5>Looks and trends</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">White Agarbatti<b class="caret"></b></a>
              <ul class="dropdown-menu megamenu">
                <li>
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <h5>Clothing</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Shoes</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Accessories</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                      </ul>
                      <h5>Looks and trends</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="banner"><a href="#"><img src="{{ URL::asset('asset/img/banner.jpg')}}" alt="" class="img img-fluid"></a></div>
                      <div class="banner"><a href="#"><img src="{{ URL::asset('asset/img/banner2.jpg')}}" alt="" class="img img-fluid"></a></div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            @if(Session::has('user'))
            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Dashboard<b class="caret"></b></a>
              <ul class="dropdown-menu megamenu">
                <li>
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <h5>Shop</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="/" class="nav-link">Homepage</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Trending Product</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">More Products</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>User</h5>
                      <ul class="list-unstyled mb-3">
                        {{-- @foreach ($users as $item) --}}
                        <li class="nav-item"><a href="my_details" class="nav-link">Account Setting</a></li>
                        {{-- @endforeach --}}
                        {{-- <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li> --}}
                        <li class="nav-item"><a href="/myorder" class="nav-link">Order history detail</a></li>
                        <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Order process</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="/cartlist" class="nav-link">Shopping cart</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h5>Pages</h5>
                      <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            @endif
          </ul>
          <div class="navbar-buttons d-flex justify-content-end">
            <!-- /.nav-collapse-->
            <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
            <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="/cartlist" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>{{$total}} items in cart</span></a></div>
          </div>
        </div>
      </div>
    </nav>
    <div id="search" class="collapse">
      <div class="container">
        <form role="search" class="ml-auto" action="/search">
          <div class="input-group">
            <input type="text" placeholder="Search" name="query" class="form-control">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </header>
