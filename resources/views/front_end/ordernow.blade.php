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
                <li aria-current="page" class="breadcrumb-item active">Checkout</li>
              </ol>
            </nav>
          </div>
          <div id="checkout" class="col-lg-9">
            <div class="box">
              <form method="POST" action="/orderplace">
                @csrf
                <h1>Checkout</h1>
                {{-- <div class="nav flex-column flex-md-row nav-pills text-center"><a href="checkout1.html" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-map-marker">                  </i>Address</a><a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-truck">                       </i>Delivery Method</a><a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-money">                      </i>Payment Method</a><a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-eye">                     </i>Order Review</a></div> --}}
                <div class="content py-3">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input id="firstname" name="fname" type="text" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input id="lastname" name="lname" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <!-- /.row-->
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="company">H.no/Street/Area</label>
                                <input id="company" name="street" type="text" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="street">City</label>
                                <input id="street" name="city" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <!-- /.row-->
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="city">District</label>
                                <input id="city" name="district" type="text" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="zip">ZIP</label>
                                <input id="zip" name="zip" type="text" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="state">State</label>
                                <select id="state" name="state" class="form-control">
                                    <option value="maharashtra">Maharashtra</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select id="country" name="country" class="form-control">
                                    <option value="india">India</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Telephone</label>
                                <input id="phone" name="mobile" type="text" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="text" class="form-control">
                                </div>
                            </div>

                                <div class="col-md-6">
                                    <div class="box payment-method">
                                    <h4>Online Payment</h4>
                                    <p>We like it all.</p>
                                    <div class="box-footer text-center">
                                        <input type="radio" name="payment" value="online">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box payment-method">
                                    <h4>Cash On Delivery</h4>
                                    <p>You pay when you get it.</p>
                                    <div class="box-footer text-center">
                                        <input type="radio" name="payment" value="cash">
                                    </div>
                                    </div>
                                </div>

                                <!-- /.row-->
                        </div>
                        <!-- /.row-->
                </div>
                <div class="box-footer d-flex justify-content-between"><a href="/cartlist" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to Basket</a>
                  <button type="submit" class="btn btn-primary">Buy Now<i class="fa fa-chevron-right"></i></button>
                </div>
              </form>
            </div>
            <!-- /.box-->

          </div>

          <!-- Order summary/.col-lg-9-->
          <div class="col-lg-3">
            <div id="order-summary" class="card">
              <div class="card-header">
                <h3 class="mt-4 mb-4">Order summary</h3>
              </div>
              <div class="card-body">
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Order subtotal</td>
                        <th>Rs {{$total}}</th>
                      </tr>
                      <tr>
                        <td>Shipping and handling</td>
                        <th>Rs 0.00</th>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <th>Rs 0.00</th>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <th>Rs {{$total}}</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-lg-3-->
        </div>
      </div>
    </div>
  </div>
@endsection
