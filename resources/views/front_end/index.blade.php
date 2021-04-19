@extends('front_end.common_page.main')
@section('content')
<div id="all">
    <div id="content">
        {{-- Banners --}}
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="main-slider" class="owl-carousel owl-theme">
                @foreach ($banners as $item)
                <div class="item"><img src="{{asset('storage/banner/'.$item->gallery )}}" alt="" class="img-fluid"></div>
                @endforeach
              {{-- <div class="item"><img src="{{ URL::asset('asset/img/main-slider11.jpg')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ URL::asset('asset/img/main-slider22.jpg')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ URL::asset('asset/img/main-slider33.png')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ URL::asset('asset/img/main-slider44.jpg')}}" alt="" class="img-fluid"></div> --}}
            </div>
            <!-- /#main-slider-->
          </div>
        </div>
      </div>
      <!--end Banners
      *** ADVANTAGES HOMEPAGE ***
      _________________________________________________________
      -->
      <div id="advantages">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-4">
              <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                <div class="icon"><i class="fa fa-heart"></i></div>
                <h3><a href="#">We love our customers</a></h3>
                <p class="mb-0">We are known to provide best possible service ever</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                <div class="icon"><i class="fa fa-tags"></i></div>
                <h3><a href="#">Best prices</a></h3>
                <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                <p class="mb-0">Free returns on everything for 3 months.</p>
              </div>
            </div>
          </div>
          <!-- /.row-->
        </div>
        <!-- /.container-->
      </div>
      <!-- /#advantages-->
      <!-- *** ADVANTAGES END ***-->
      <!--
      *** Tranding PRODUCT SLIDESHOW ***
      _________________________________________________________
      -->
      <div id="hot">
        <div class="box py-4">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-0">Tranding this week</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="product-slider owl-carousel owl-theme">
              @foreach ($products as $item)
            <div class="item">
                <a href="detail/{{$item['id']}}">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><img src="{{asset('storage/product/'.$item->gallery )}}" style="width: 500px;height:200px" alt="" class="img-fluid"></div>
                                <div class="back"><img src="{{asset('storage/product/'.$item->gallery )}}" style="width: 500px;height:200px" alt="" class="img-fluid"></div>
                            </div>
                        </div><img class="invisible" src="{{asset('storage/product/'.$item->gallery )}}" style="width: 500px;height:200px" alt="" class="img-fluid">
                        <div class="text">
                            <h3>{{$item['name']}}</h3>
                            <p class="price">
                                <del></del>Rs {{$item['price']}}
                            </p>
                        </div>
                    </div>
                </a>
              <!-- /.product-->
            </div>
            @endforeach
            {{-- <div class="item">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{ URL::asset('asset/img/lovely-rose-agarbatti-280.jpg')}}" alt="" class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{ URL::asset('asset/img/lovely-rose-agarbatti-280.jpg')}}" alt="" class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{ URL::asset('asset/img/lovely-rose-agarbatti-280.jpg')}}" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3><a href="detail.html">White Blouse Armani</a></h3>
                  <p class="price">
                    <del>$280</del>$143.00
                  </p>
                </div>
                <!-- /.text-->
                <div class="ribbon sale">
                  <div class="theribbon">SALE</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
                <div class="ribbon new">
                  <div class="theribbon">NEW</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
                <div class="ribbon gift">
                  <div class="theribbon">GIFT</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
              </div>
              <!-- /.product-->
            </div>
            <div class="item">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{ URL::asset('asset/img/yogi-agarbatti-278.jpg')}}" alt="" class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{ URL::asset('asset/img/yogi-agarbatti-278.jpg')}}" alt="" class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{ URL::asset('asset/img/yogi-agarbatti-278.jpg')}}" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3><a href="detail.html">Black Blouse Versace</a></h3>
                  <p class="price">
                    <del></del>$143.00
                  </p>
                </div>
                <!-- /.text-->
              </div>
              <!-- /.product-->
            </div>
            <div class="item">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{ URL::asset('asset/img/special-bhavana-agarbatti-275.jpg')}}" alt="" class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{ URL::asset('asset/img/special-bhavana-agarbatti-275.jpg')}}" alt="" class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{ URL::asset('asset/img/special-bhavana-agarbatti-275.jpg')}}" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3><a href="detail.html">Black Blouse Versace</a></h3>
                  <p class="price">
                    <del></del>$143.00
                  </p>
                </div>
                <!-- /.text-->
              </div>
              <!-- /.product-->
            </div>
            <div class="item">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{ URL::asset('asset/img/special-bhavana-agarbattis-283.jpg')}}" alt="" class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{ URL::asset('asset/img/special-bhavana-agarbattis-283.jpg')}}" alt="" class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{ URL::asset('asset/img/special-bhavana-agarbattis-283.jpg')}}" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3><a href="detail.html">White Blouse Versace</a></h3>
                  <p class="price">
                    <del></del>$143.00
                  </p>
                </div>
                <!-- /.text-->
                <div class="ribbon new">
                  <div class="theribbon">NEW</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
              </div>
              <!-- /.product-->
            </div>
            <div class="item">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{ URL::asset('asset/img/special-bhavana-agarbatti-275.jpg')}}" alt="" class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{ URL::asset('asset/img/special-bhavana-agarbatti-275.jpg')}}" alt="" class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{ URL::asset('asset/img/special-bhavana-agarbatti-275.jpg')}}" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3><a href="detail.html">Fur coat</a></h3>
                  <p class="price">
                    <del></del>$143.00
                  </p>
                </div>
                <!-- /.text-->
                <div class="ribbon gift">
                  <div class="theribbon">GIFT</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
              </div>
              <!-- /.product-->
            </div>
            <div class="item">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{ URL::asset('asset/img/lovely-rose-agarbatti-280.jpg')}}" alt="" class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{ URL::asset('asset/img/lovely-rose-agarbatti-280.jpg')}}" alt="" class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{ URL::asset('asset/img/lovely-rose-agarbatti-280.jpg')}}" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3><a href="detail.html">White Blouse Armani</a></h3>
                  <p class="price">
                    <del>$280</del>$143.00
                  </p>
                </div>
                <!-- /.text-->
                <div class="ribbon sale">
                  <div class="theribbon">SALE</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
                <div class="ribbon new">
                  <div class="theribbon">NEW</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
                <div class="ribbon gift">
                  <div class="theribbon">GIFT</div>
                  <div class="ribbon-background"></div>
                </div>
                <!-- /.ribbon-->
              </div>
              <!-- /.product-->
            </div>
            <div class="item">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{ URL::asset('asset/img/yogi-agarbatti-278.jpg')}}" alt="" class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{ URL::asset('asset/img/yogi-agarbatti-278.jpg')}}" alt="" class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{ URL::asset('asset/img/yogi-agarbatti-278.jpg')}}" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3><a href="detail.html">Black Blouse Versace</a></h3>
                  <p class="price">
                    <del></del>$143.00
                  </p>
                </div>
                <!-- /.text-->
              </div>
              <!-- /.product-->
            </div> --}}
            <!-- /.product-slider-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#hot-->
        <!-- *** Trending END ***-->
      </div>
      <!--
      *** More Product ***
      _________________________________________________________
      -->
      {{-- <div class="container">
        <div class="col-md-12">
          <div class="box slideshow">
            <h3>Get Inspired</h3>
            <p class="lead">Get the inspiration from our world class designers</p>
            <div id="get-inspired" class="owl-carousel owl-theme">
              <div class="item"><a href="#"><img src="{{ URL::asset('asset/img/getinspired1.jpg')}}" alt="Get inspired" class="img-fluid"></a></div>
              <div class="item"><a href="#"><img src="{{ URL::asset('asset/img/getinspired2.jpg')}}" alt="Get inspired" class="img-fluid"></a></div>
              <div class="item"><a href="#"><img src="{{ URL::asset('asset/img/getinspired3.jpg')}}" alt="Get inspired" class="img-fluid"></a></div>
            </div>
          </div>
        </div>
      </div> --}}
      <div id="all">
        <div id="content">
            <div id="hot">
                <div class="box py-4">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <h2 class="mb-0">Explore More Products</h2>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                {{-- <div class="box info-bar">
                  <div class="row">
                    <div class="col-md-12 col-lg-4 products-showing">Showing <strong>12</strong> of <strong>25</strong> products</div>
                    <div class="col-md-12 col-lg-7 products-number-sort">
                      <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                        <div class="products-number"><strong>Show</strong><a href="#" class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#" class="btn btn-outline-secondary btn-sm">All</a><span>products</span></div>
                        <div class="products-sort-by mt-2 mt-lg-0"><strong>Sort by</strong>
                          <select name="sort-by" class="form-control">
                            <option>Price</option>
                            <option>Name</option>
                            <option>Sales first</option>
                          </select>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> --}}
                <div class="row products">
                    @foreach ($pages as $item)
                  <div class="col-lg-3 col-md-4">
                    <a href="detail/{{$item['id']}}">
                    <div class="product">
                      <div class="flip-container">
                        <div class="flipper">
                          <div class="front"><img src="{{asset('storage/product/'.$item->gallery )}}" style="width: 500px;height:200px" alt="" class="img-fluid"></div>
                          <div class="back"><img src="{{asset('storage/product/'.$item->gallery )}}" style="width: 500px;height:200px" alt="" class="img-fluid"></div>
                        </div>
                      </div><img class="invisible" src="{{asset('storage/product/'.$item->gallery )}}" style="width: 500px;height:200px" alt="" class="img-fluid">
                      <div class="text">
                        <h3>{{$item['name']}}</h3>
                        <p class="price">
                          <del></del>Rs {{$item['price']}}
                        </p>
                        <div class="text-center">
                        <p class="buttons btn btn-outline-secondary">View detail</p>
                        </div>
                        {{-- <p class="buttons"><a href="deatail/{{$item['id']}}" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p> --}}
                      </div>
                      <!-- /.text-->
                    </div>
                    </a>
                    <!-- /.product-->
                  </div>

                  @endforeach
                  <!-- /.products-->
                </div>

              <div class="pages">
                  {{$pages->links()}}
              </div>

                {{-- <div class="pages">
                  <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a></p>
                  <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                    <ul class="pagination">
                      <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                      <li class="page-item active"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link">5</a></li>
                      <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                    </ul>
                  </nav>
                </div>
              </div> --}}
              <!-- /.col-lg-9-->
            </div>
          </div>
        </div>
      </div>
      <!-- *** more product END ***-->
      <!--
      *** BLOG HOMEPAGE ***
      _________________________________________________________
      -->
      <div class="box text-center">
        <div class="container">
          <div class="col-md-12">
            <h3 class="text-uppercase">From our blog</h3>
            <p class="lead mb-0">What's new in the world of fashion? <a href="blog.html">Check our blog!</a></p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-md-12">
          <div id="blog-homepage" class="row">
            <div class="col-sm-6">
              <div class="post">
                <h4><a href="post.html">Fashion now</a></h4>
                <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a></p>
                <hr>
                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="post">
                <h4><a href="post.html">Who is who - example blog post</a></h4>
                <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a></p>
                <hr>
                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
              </div>
            </div>
          </div>
          <!-- /#blog-homepage-->
        </div>
      </div>
      <!-- /.container-->
      <!-- *** BLOG HOMEPAGE END ***-->
    </div>
  </div>
@endsection

