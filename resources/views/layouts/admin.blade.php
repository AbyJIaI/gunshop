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
    <link rel="stylesheet" href="{{ asset('css/easy-responsive-tabs.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
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

            </div>
            <div class="col-md-6 logo-w3layouts text-center">
                <h1 class="logo-w3layouts">
                    <a class="navbar-brand" href="{{ route('admin') }}">Admin Panel</a>
                </h1>
            </div>

            <div class="col-md-3 top-info-cart text-right mt-lg-4">
                <ul class="cart-inner-info">
                    @auth
                        @if(Auth::user()->role->id == 1)
                            <li class="button">
                                <a class="" href="{{ route('index') }}">
                                    <span class="fa fa-home" aria-hidden="true"></span>
                                </a>
                            </li>
                        @endif
                        <li class="button-log">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-dark btn-sm">
                                    <span class="fa fa-sign-out-alt" aria-hidden="true"></span></button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
        <label class="top-log mx-auto"></label>
        <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-mega mx-auto">
                    <li class="nav-item {{ (request()->is('/genders')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('genders.index') }}">Genders</a>
                    </li>
                    <li class="nav-item {{ (request()->is('/brand')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('brand.index')}} ">Brands</a>
                    </li>
                    <li class="nav-item {{ (request()->is('/calibertype')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('calibertype.index') }}">Caliber types</a>
                    </li>
                    <li class="nav-item {{ (request()->is('/category')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('category.index') }}">Categories</a>
                    </li>
                    <li class="nav-item {{ (request()->is('/cities')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('cities.index') }}">Cities</a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-mega mx-auto">
                    <li class="nav-item {{ (request()->is('/roles*')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                    </li>
                    <li class="nav-item {{ (request()->is('/services')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('services.index')}} ">Services</a>
                    </li>
                    <li class="nav-item {{ (request()->is('/post')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                    </li>
                    <li class="nav-item {{ (request()->is('/paymenttypes')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('category.index') }}">Payment types</a>
                    </li>
                    <li class="nav-item {{ (request()->is('/products')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
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
{{--<footer class="py-lg-5 py-3">
</footer>--}}
<!-- //footer -->

<!--jQuery-->
<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>

<!--search jQuery-->
<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('js/classie-search.js') }}"></script>
<script src="{{ asset('js/demo1-search.js') }}"></script>
<!--//search jQuery-->
<!-- cart-js -->
<script src="{{ asset('js/minicart.js') }}"></script>
<script>
    googles.render();

    googles.cart.on('googles_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<script>
    $(document).ready(function () {
        $(".button-log a").click(function () {
            $(".overlay-login").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay-close1').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>
<!-- carousel -->
<!-- price range (top products) -->
<script src="js/jquery-ui.js"></script>
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
<!-- Count-down -->
{{--<script src="js/simplyCountdown.js"></script>--}}
<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
<script>
    var d = new Date();
    simplyCountdown('simply-countdown-custom', {
        year: d.getFullYear(),
        month: d.getMonth() + 2,
        day: 25
    });
</script>
<!--// Count-down -->
<script src="js/owl.carousel.js"></script>
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
<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->
<script src="js/easy-responsive-tabs.js"></script>
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
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
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
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
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


