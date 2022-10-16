<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' , '')</title>
    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/front/assets/img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/front/assets/css/vendor.css">
    <link rel="stylesheet" href="/front/assets/css/style.css">
    <link rel="stylesheet" href="/front/assets/css/responsive.css">
    <link rel="stylesheet" href="/front/assets/css/rod.css">

</head>
<body >

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <div class="body-overlay" id="body-overlay"></div>
    <!-- preloader area end -->

    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- navbar start -->
    <div class="navbar-area @if(!Request::is('/')) navbar-area-inner bg-yellow @endif">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>



                <div class="logo">
                    <a class="main-logo" href="{{ url('/') }}"><img src="{{ asset('uploads/settings/') . '/' . setting('app_header_logo') }}" alt="img"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <ul>
                        <li><a class="search header-search" href="#"><i class="fa fa-search"></i></a></li>
                        <li class=""><a class="login-btn" href="#">Sign up</a></li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open">
                        @include('front.components.menu')
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li>
                            <div class="single-search-wrap">
                                <input type="text" placeholder="Search">
                                <button><img src="/front/assets/img/icon/searching.png"></button>
                            </div>
                        </li>
                        <li class=""><a class="btn btn-blue" href="#">Sign up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    @yield('content')

    <!-- footer area start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget widget widget_address">
                        <a class="logo" href="#"><img src="{{ asset('uploads/settings/') . '/' . setting('app_footer_logo') }}" alt="#"></a>
                        <h5 class="widget-title">{{ setting('app_name') }}</h5>
                        <p>{{ setting('footer_quote') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget widget widget_post">
                        <h4 class="widget-title">Recent Post</h4>
                        <div class="media align-items-center">
                            <div class="media-left text-center">
                                <h5>19</h5>
                                <h6>June</h6>
                            </div>
                            <div class="media-body">
                                <a href="#">All this idea.</a>
                            </div>
                        </div>
                        <div class="media align-items-center">
                            <div class="media-left text-center">
                                <h5>14</h5>
                                <h6>June</h6>
                            </div>
                            <div class="media-body">
                                <a href="#">All this idea.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget widget widget_link">
                        <h4 class="widget-title">Our Sitemap</h4>
                        <ul>
                            {!! \App\Menu::show_menu('footer-menu') !!}
                            {{-- <li><a href="#"><i class="la la-angle-right"></i>About Us</a></li>
                            <li><a href="#"><i class="la la-angle-right"></i>Home</a></li>
                            <li><a href="#"><i class="la la-angle-right"></i>News</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget widget widget_contact">
                        <h4 class="widget-title">Newsletter</h4>
                        <p>{{ setting('newsLetter_quote')}}</p>
                        <div class="single-search-wrap">
                            <input type="text" placeholder="your email address">
                            <button><img src="/front/assets/img/icon/paper-plane.png"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p>{!! setting('app_copyright') !!}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="la la-arrow-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="/front/assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="/front/assets/js/main.js"></script>
</body>
</html>


