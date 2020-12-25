<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gunshop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/login_overlay.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/style6.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui1.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/easy-responsive-tabs.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/checkout.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">
</head>

<body>
<div class="banner-top container-fluid" id="home">
    <!-- header -->
    <header>
        <div class="row">
            <div class="col-md-3 top-info text-left mt-lg-4">
                <h6>Need Help</h6>
                <ul>
                    <li>
                        <i class="fas fa-phone"></i> Call</li>
                    <li class="number-phone mt-3">8 7272 098 9808</li>
                </ul>
            </div>
            <div class="col-md-6 logo-w3layouts text-center">
                <h1 class="logo-w3layouts">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        Gunshop </a>
                </h1>
            </div>

            <div class="col-md-3 top-info-cart text-right mt-lg-4">
                <ul class="cart-inner-info">
                    @auth
                        @if(Auth::user()->role_id == 1)
                            <li class="button">
                                <a class="" href="{{ route('admin') }}">
                                    <span class="fa fa-user-secret" aria-hidden="true" style="color: black"></span>
                                </a>
                            </li>
                        @else
                            <li class="button">
                                <a class="btn-open" href="{{ route('profile.show', Auth::user()->login) }}">
                                    <span class="fa fa-user" aria-hidden="true" style="color: black"></span>
                                </a>
                            </li>
                        @endif
                    @endauth
                    @guest
                    <li class="button-log">
                        <a class="btn-open" href="#">
                            <span class="fa fa-user" aria-hidden="true"></span>
                        </a>
                    </li>
                        @endguest
                    <li class="galssescart galssescart2 cart cart box_1">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <a href="{{ route('checkout') }}" class="top_googles_cart" type="submit" name="submit" value="" style="color:#000;">
                            My Cart
                            <i class="fas fa-cart-arrow-down" style="color:#000;"></i>
                        </a>
                    </li>
                    @auth
                            <li class="button-log">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-dark btn-sm">
                                        <span class="fa fa-sign-out-alt" aria-hidden="true"></span></button>
                                </form>
                            </li>
                        @endauth
                </ul>
                <!---->
                <div class="overlay-login text-left">
                    <button type="button" class="overlay-close1">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <div class="wrap">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <div class="login p-5 bg-dark mx-auto mw-100">
{{--                            {{ dd(Auth::user()) }}--}}
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-2">{{ __('E-Mail Address') }}</label>
                                        <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">{{ __('Password') }}</label>
                                        <input type="password" id="exampleInputPassword1" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <div class="form-group">

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                                </form>
                        </div>
                        <!---->
                    </div>
                </div>
                <!---->
            </div>
        </div>
        <div class="search">
            <div class="mobile-nav-button">
                <button id="trigger-overlay" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <!-- open/close -->
            <div class="overlay overlay-door">
                <button type="button" class="overlay-close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                <form action="{{ route('search') }}" method="post" class="d-flex">
                    @csrf
                    <input class="form-control" type="search" placeholder="Search here..." name="name">
                    <button type="submit" class="btn btn-primary submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

            </div>
            <!-- open/close -->
        </div>
        <label class="top-log mx-auto"></label>
        <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-mega mx-auto">
                    <li class="nav-item {{ (request()->is('/*')) ? 'active' : '' }}">
                        <a class="nav-link ml-lg-0" href="{{ route('index') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('about*')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about')}} ">About</a>
                    </li>
                    <li class="nav-item dropdown {{ (request()->is('shop*')) ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Features
                        </a>
                        <ul class="dropdown-menu mega-menu ">
                            <li>
                                <div class="row">
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
                                        <ul>
                                            <li class="mt-2">
                                                <a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('customer') }}">Customers</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
                                        <div class="media-mini mt-3">
                                            <a href="{{ route('shop') }}">
                                                <img src="images/g2.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
                                        <div class="media-mini mt-3">
                                            <a href="{{ route('shop') }}">
                                                <img src="images/g3.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu mega-menu ">
                            <li>
                                @php($c = \App\Models\Category::hydrate($global_categories)->flatten())
                                @if(isset($c))
                                    @php($i = 0)
                                    <div class="row">
                                        @foreach($c as $id => $category)
                                            @if($category->category_id == null)
                                                <div class="col-md-4 media-list span4 text-left">
                                                    <a href="{{ route('shop', $category->id, $category->name) }}"><h5 class="tittle-w3layouts-sub mb-3">{{ $category->name }}</h5></a>
                                                    @if($category->sub_categories)
                                                        <ul>
                                                            @foreach($category->sub_categories as $sub)
                                                                <li class="media-mini ml-5">
                                                                    <a href="{{ route('shop', $sub->id) }}">{{ $sub->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </div>
                                            @endif
                                            @php($i++)
                                        @endforeach
                                    </div>
                                @endif
                                <hr>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ (request()->is('contact*')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <!-- //header -->
</div>
<div class="container-fluid mb-5">
    @yield('content')
</div>
<!--footer -->
<footer class="py-lg-5 py-3">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row footer-top-w3layouts">
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>About Us</h3>
                </div>
                <div class="footer-text">
                    <p>"Gunshop" - SHOP of hunting, sporting weapons and fishing goods IN ALMATY</p>
                    <ul class="footer-social text-left mt-lg-4 mt-3">

                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-google-plus-g"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-linkedin-in"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fas fa-rss"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>Get in touch</h3>
                </div>
                <div class="contact-info">
                    <h4>Location :</h4>
                    <p>34/a, st. Manasa, Almaty.</p>
                    <div class="phone">
                        <h4>Contact :</h4>
                        <p>Phone : +7272 098 9808</p>
                        <p>Email :
                            <a href="mailto:info@example.com">support@gunshop.kz</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>Quick Links</h3>
                </div>

                <ul class="links">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('404') }}">Error</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>Sign up for your offers</h3>
                </div>
                <div class="footer-text">
                    <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                    <form action="#" method="post">
                        <input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
                        <button class="btn1">
                            <i class="far fa-envelope" aria-hidden="true"></i>
                        </button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-w3layouts mt-4">
            <p class="copy-right text-center ">&copy; 2020 Gunshop. All Rights Reserved | Design by
                <a href="http://w3layouts.com/"> W3layouts </a>
            </p>
        </div>
    </div>
</footer>
<!-- //footer -->

<!--jQuery-->
<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>

<!--search jQuery-->
<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('js/classie-search.js') }}"></script>
<script src="{{ asset('js/demo1-search.js') }}"></script>
<!--//search jQuery-->
<!-- carousel -->
<!-- price range (top products) -->
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script>
    //<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>
<!-- //price range (top products) -->
@if(request()->is('/'))
    <!-- Count-down -->
    <script src="{{ asset('js/simplyCountdown.js') }}"></script>
    <link href="{{ asset('css/simplyCountdown.css') }}" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    900: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>

    <!-- //end-smooth-scrolling -->
@endif
<!-- single -->
<script src="{{ asset('js/imagezoom.js') }}"></script>
<!-- single -->
<!-- script for responsive tabs -->

    <script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
<!--quantity-->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.value-plus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) + 1;
        divUpd.text(newVal);
        var id = $(this).parent().find('.value')[0]['attributes'][1]['nodeValue'];
        console.log(id);
        $.ajax({
            type: "GET",
            url: "/set_session",
            data: { id: id, quantity: newVal, operation: 0 },
            success: console.log('success')
        });
    });

    $('.value-minus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1) divUpd.text(newVal);
        var id = $(this).parent().find('.value')[0]['attributes'][1]['nodeValue'];
        $.ajax({
            type: "GET",
            url: "/set_session",
            data: { id: id, quantity: newVal, operation: 1 }
        });
    });
</script>
<!--close-->
<script>
    function hideElement(id) {
        document.getElementById(id).hidden = true;
        id = id.substring(3);
        $.ajax({
            type: "GET",
            url: "/delete_cart",
            data: { id: id }
        });
    }
</script>
<!--//close-->
<!-- FlexSlider -->
<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider1').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->

<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<script src="{{ asset('js/move-top.js') }}"></script>
<script src="{{ asset('js/easing.js') }}"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->

<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- js file -->
</body>
</html>


