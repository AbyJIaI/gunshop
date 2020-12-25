@extends('layouts.master')
@section('content')
    <!-- banner -->
    <div class="banner_inner">
        <div class="services-breadcrumb">
            <div class="inner_breadcrumb">

                <ul class="short">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>

    </div>
    <!--//banner -->
    <!--/shop-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 mt-3">New Arrivals for you </h3>
                <div class="row">
                    <!-- product left -->
                    <div class="side-bar col-lg-3">
                        <div class="search-hotel">
                            <h3 class="agileits-sear-head">Search Here..</h3>
                            <form action="#" method="post">
                                <input class="form-control" type="search" name="search" placeholder="Search here..."
                                       required="">
                                <button class="btn1">
                                    <i class="fas fa-search"></i>
                                </button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <!-- price range -->
                        <div class="range">
                            <h3 class="agileits-sear-head">Price range</h3>
                            <ul class="dropdown-menu6">
                                <li>

                                    <div id="slider-range"></div>
                                    <input type="text" id="amount"
                                           style="border: 0; color: #ffffff; font-weight: normal;"/>
                                </li>
                            </ul>
                        </div>
                        <!-- //price range -->
                        <!-- deals -->
                        <div class="deal-leftmk left-side">
                            <h3 class="agileits-sear-head">Special Deals</h3>
                            <div class="special-sec1">
                                <div class="img-deals">
                                    <img
                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/s1.jpg"
                                        alt="">
                                </div>
                                <div class="img-deal1">
                                    <h3>Farenheit (Grey)</h3>
                                    <a href="single.blade.php">$575.00</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="special-sec1">
                                <div class="col-xs-4 img-deals">
                                    <img
                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/s2.jpg"
                                        alt="">
                                </div>
                                <div class="col-xs-8 img-deal1">
                                    <h3>Opium (Grey)</h3>
                                    <a href="single.blade.php">$325.00</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="special-sec1">
                                <div class="col-xs-4 img-deals">
                                    <img
                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/m2.jpg"
                                        alt="">
                                </div>
                                <div class="col-xs-8 img-deal1">
                                    <h3>Azmani Round</h3>
                                    <a href="single.blade.php">$725.00</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="special-sec1">
                                <div class="col-xs-4 img-deals">
                                    <img
                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/m4.jpg"
                                        alt="">
                                </div>
                                <div class="col-xs-8 img-deal1">
                                    <h3>Farenheit Oval</h3>
                                    <a href="single.blade.php">$325.00</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- //deals -->
                    </div>
                    <!-- //product left -->
                    <!--/product right-->
                    <div class="left-ads-display col-lg-9">
                        <div class="wrapper_top_shop">
                            <div class="row">
                            @if(isset($products))
                                @foreach($products as $id => $product)
                                    @if($id != 0 && $id % 4 == 0)
                                        </div>
                                        <div class="row">
                                    @endif
                                            <div class="col-md-3 product-men women_two shop-gd">
                                                <div class="product-googles-info googles">
                                                    <div class="men-pro-item">
                                                        <div class="men-thumb-item">
                                                            <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid" alt="">
                                                            <div class="men-cart-pro">
                                                                <div class="inner-men-cart-pro">
                                                                    <a href="{{ route('products.show', $product) }}" class="link-product-add-cart">Quick
                                                                        View</a>
                                                                </div>
                                                            </div>
                                                            <span class="product-new-top">New</span>
                                                        </div>
                                                        <div class="item-info-product">
                                                            <div class="info-product-price">
                                                                <div class="grid_meta">
                                                                    <div class="product_price">
                                                                        <h4>
                                                                            <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                                                                        </h4>
                                                                        <div class="grid-price mt-2">
                                                                            <span class="money ">{{ $product->price }} tng</span>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="stars">
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="googles single-item hvr-outline-out">
                                                                    <form action="#" method="post">
                                                                        <input type="hidden" name="cmd" value="_cart">
                                                                        <input type="hidden" name="add" value="1">
                                                                        <input type="hidden" name="googles_item" value="{{ $product->name }}">
                                                                        <input type="hidden" name="amount" value="{{ $product->price }}">
                                                                        <button type="submit" class="googles-cart pgoogles-cart">
                                                                            <i class="fas fa-cart-plus"></i>
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                @endforeach
                            @endif
                            </div>
                        </div>
                    </div>
                    <!--//product right-->
                </div>
                <!--/slide-->
                <div class="slider-img mid-sec mt-lg-5 mt-2">
                    <!--//banner-sec-->
                    <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
                    <div class="mid-slider">
                        <div class="owl-carousel owl-theme row">
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img
                                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/s5.jpg"
                                                        class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="#" class="link-product-add-cart">Quick
                                                                View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="single.blade.php">Fastrack Aviator </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$325.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item"
                                                                       value="Fastrack Aviator">
                                                                <input type="hidden" name="amount" value="325.00">
                                                                <button type="submit"
                                                                        class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>

                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img
                                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/s6.jpg"
                                                        class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.blade.php" class="link-product-add-cart">Quick
                                                                View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="single.blade.php">MARTIN Aviator </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$425.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item"
                                                                       value="MARTIN Aviator">
                                                                <input type="hidden" name="amount" value="425.00">
                                                                <button type="submit"
                                                                        class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img
                                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/s7.jpg"
                                                        class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.blade.php" class="link-product-add-cart">Quick
                                                                View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="single.blade.php">Royal Son Aviator </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$425.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item"
                                                                       value="Royal Son Aviator">
                                                                <input type="hidden" name="amount" value="425.00">
                                                                <button type="submit"
                                                                        class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img
                                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/s8.jpg"
                                                        class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.blade.php" class="link-product-add-cart">Quick
                                                                View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="single.blade.php">Irayz Butterfly </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$281.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item"
                                                                       value="Irayz Butterfly">
                                                                <input type="hidden" name="amount" value="281.00">
                                                                <button type="submit"
                                                                        class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img
                                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/s9.jpg"
                                                        class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.blade.php" class="link-product-add-cart">Quick
                                                                View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="single.blade.php">Jerry Rectangular </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$525.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item"
                                                                       value="Jerry Rectangular ">
                                                                <input type="hidden" name="amount" value="525.00">
                                                                <button type="submit"
                                                                        class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img
                                                        src="../../../../../Downloads/goggles-web_Free07-08-2018_1255464790/web/images/s10.jpg"
                                                        class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.blade.php" class="link-product-add-cart">Quick
                                                                View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="single.blade.php">Herdy Wayfarer </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$325.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item"
                                                                       value="Herdy Wayfarer">
                                                                <input type="hidden" name="amount" value="325.00">
                                                                <button type="submit"
                                                                        class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//slider-->
            </div>
        </div>
    </section>
@endsection
