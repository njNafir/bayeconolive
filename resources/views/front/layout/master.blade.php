<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Bay Economic Zone">
    <meta name="author" content="">
    <title>@yield('title', 'Bay Economy')</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/front/images/fav.png">
    <link rel="stylesheet" href="/front/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/front/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/front/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="/front/css/font-awesome.min.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="/front/revolution/css/settings.css">
    <link rel="stylesheet" href="/front/revolution/css/layers.css">
    <link rel="stylesheet" href="/front/revolution/css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="/front/css/animate.css">
    <link rel="stylesheet" href="/front/css/magnific-popup.css">
    <link rel="stylesheet" href="/front/css/lightcase.css">
    <link rel="stylesheet" href="/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="/front/css/menu.css">
    <link rel="stylesheet" href="/front/css/slick.css">
    <link rel="stylesheet" href="/front/css/styles.css">
    <link rel="stylesheet" id="color" href="/front/css/colors/bay-red.css">
    <link rel="stylesheet" href="/front/css/default.css">
    <link rel="stylesheet" id="color" href="/front/css/rod.css">
</head>

<body class="hd-white @if(!Request::is('/'))inner-pages ui-elements @endif">
<!-- Wrapper -->
<div id="wrapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
    ================================================== -->
    <header id="header-container">

        <div class="topbar">
            <div class="container container-header">
                <div class="row">
                    <div class="col-md-6">
                        <p>Welcome to Bay Economic Zone</p>
                    </div>
                    <div class="col-md-6">
                        <p class="top-phone"><i class="fa fa-phone" aria-hidden="true"></i>{{ setting('app_contact') }}</p>
                        <p class="top-email"><i class="fa fa-envelope" aria-hidden="true"></i>{{ setting('app_email') }}</p>
                    </div>
                </div>
            </div>
        </div>




        <!-- Header -->
        <div id="header">

            <div class="container container-header">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{ url('/') }}"><img src="/front/images/logo-bay-economy.png" alt=""></a>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <!--<li><a href="#">Home</a>
                                <ul>
                                    <li><a href="#">Home Slider</a>
                                        <ul>
                                            <li><a href="index-11.html">Home Image Slider</a></li>
                                            <li><a href="index-13.html">Slider Presentation 2</a></li>
                                            <li><a href="index.html">Slider Presentation 3</a></li>
                                            <li><a href="index-19.html">Home Modern Slider</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            @include('front.components.menu')
                        </ul>
                    </nav>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->


                <!-- lang-wrap-->
                {{-- <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                    <div class="lang-wrap">
                        <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i
                                class="fa fa-caret-down arrlan"></i></div>
                        <ul class="lang-tooltip lang-action no-list-style">
                            <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                            <li><a href="#" data-lantext="Fr">Francais</a></li>
                            <li><a href="#" data-lantext="Es">Espanol</a></li>
                            <li><a href="#" data-lantext="De">Deutsch</a></li>
                        </ul>
                    </div>
                </div> --}}
                <!-- lang-wrap end-->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    @yield('content')

    <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="netabout">
                            <a href="{{ url('/') }}" class="logo">
                                <img src="/front/images/logo-bay-economy-white.png" alt="netcom">
                            </a>
                            <p>{{ setting('footer_quote') }}</p>
                        </div>
                        <div class="contactus">
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">{{ setting('app_address') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">{{ setting('app_contact') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">{{ setting('app_email') }}</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="navigation">
                            <h3>Quick Links</h3>
                            <div class="nav-footer">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/page/facilities') }}">Facilities & Incentives</a></li>
                                    <li><a href="{{ url('/page/gallery') }}">Gallery</a></li>
                                    <li><a href="{{ url('/page/videos') }}">Video Gallery</a></li>
                                    <li><a href="{{ action('WebController@blogs') }}">News & Events</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="navigation">
                            <h3>&nbsp;</h3>
                            <div class="nav-footer">
                                <ul>
                                    <li><a href="{{ url('/page/explore') }}">Explore</a></li>
                                    <li><a href="{{ url('/page/about_us') }}">About Us</a></li>
                                    <li><a href="{{ url('/page/contact') }}">Contact</a></li>
                                    <li><a href="{{ url('/page/investor') }}">Request Investor</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="widget">
                            <h3>Twitter Feeds</h3>
                            <div class="twitter-widget contuct">
                                <div class="twitter-area">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">Lorem ipsum</a> all share them with me baby said inspet.
                                            </h5>
                                            <h4>about 5 days ago</h4>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">Lorem ipsum</a> all share them with me baby said inspet.
                                            </h5>
                                            <h4>about 5 days ago</h4>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">Lorem ipsum</a> all share them with me baby said inspet.
                                            </h5>
                                            <h4>about 5 days ago</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="newsletters">
                            <h3>Newsletters</h3>
                            <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in
                                your inbox.</p>
                        </div>
                        <form class="bloq-email mailchimp form-inline" method="post">
                            <label for="subscribeEmail" class="error"></label>
                            <div class="email">
                                <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                <input type="submit" value="Subscribe">
                                <p class="subscription-success"></p>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <p>2021 © Copyright - All Rights Reserved.</p>
                <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> & Powered By <a
                        href="https://bayit.systems">BayIT</a></p>
            </div>
        </div>
    </footer>

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!--register form -->
    <div class="login-and-register-form modal">
        <div class="main-overlay"></div>
        <div class="main-register-holder">
            <div class="main-register fl-wrap">
                <div class="close-reg"><i class="fa fa-times"></i></div>
                <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                <div class="soc-log fl-wrap">
                    <p>Login</p>
                    <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                    <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                </div>
                <div class="log-separator fl-wrap"><span>Or</span></div>
                <div id="tabs-container">
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1">Login</a></li>
                        <li><a href="#tab-2">Register</a></li>
                    </ul>
                    <div class="tab">
                        <div id="tab-1" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" name="registerform">
                                    <label>Username or Email Address * </label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Password * </label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                    <div class="clearfix"></div>
                                    <div class="filter-tags">
                                        <input id="check-a" type="checkbox" name="check">
                                        <label for="check-a">Remember me</label>
                                    </div>
                                </form>
                                <div class="lost_password">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div id="tab-2" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form"
                                          id="main-register-form2">
                                        <label>First Name * </label>
                                        <input name="name" type="text" onClick="this.select()" value="">
                                        <label>Second Name *</label>
                                        <input name="name2" type="text" onClick="this.select()" value="">
                                        <label>Email Address *</label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password *</label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!-- ARCHIVES JS -->
    <script src="/front/js/jquery-3.5.1.min.js"></script>
    <script src="/front/js/jquery-ui.js"></script>
    <script src="/front/js/tether.min.js"></script>
    <script src="/front/js/popper.min.js"></script>
    <script src="/front/js/moment.js"></script>
    <script src="/front/js/transition.min.js"></script>
    <script src="/front/js/bootstrap.min.js"></script>
    <script src="/front/js/mmenu.min.js"></script>
    <script src="/front/js/mmenu.js"></script>
    <script src="/front/js/slick.min.js"></script>
    <script src="/front/js/slick2.js"></script>
    <script src="/front/js/fitvids.js"></script>
    <script src="/front/js/jquery.waypoints.min.js"></script>
    <script src="/front/js/jquery.counterup.min.js"></script>
    <script src="/front/js/imagesloaded.pkgd.min.js"></script>
    <script src="/front/js/isotope.pkgd.min.js"></script>
    <script src="/front/js/smooth-scroll.min.js"></script>
    <script src="/front/js/lightcase.js"></script>
    <script src="/front/js/owl.carousel.js"></script>
    <script src="/front/js/jquery.magnific-popup.min.js"></script>
    <script src="/front/js/ajaxchimp.min.js"></script>
    <script src="/front/js/newsletter.js"></script>
    <script src="/front/js/jquery.form.js"></script>
    <script src="/front/js/jquery.validate.min.js"></script>
    <script src="/front/js/forms-2.js"></script>
    <script src="/front/js/color-switcher.js"></script>
    <script src="/front/js/ui-lement.js"></script>

    <!-- Slider Revolution scripts -->
    <script src="/front/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/front/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/front/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/front/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/front/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/front/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/front/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/front/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/front/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/front/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/front/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <script>
        var tpj = jQuery;

        var revapi474;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_328_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_328_1");
            } else {
                revapi328 = tpj("#rev_slider_328_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//revolution.themepunch.com/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 10000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "off",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 125,
                                v_offset: 17
                            },
                            right: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 65,
                                v_offset: 19
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "hermes",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "left",
                            v_align: "bottom",
                            h_offset: 7,
                            v_offset: 50,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [700, 700, 700, 700],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 400,
                        speedbg: 0,
                        speedls: 0,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "spinner5",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenOffset: "60",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
            ; /* END OF revapi call */
        }); /*ready*/

    </script>

    <!-- MAIN JS -->
    <script src="/front/js/script.js"></script>
    <script src="/front/js/investor.js"></script>

    <script>
        /*====================
     Video light box and magnificent popup
     ====================*/
        $('.popup-yt, .popup-vimeo').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: function (url) {
                            var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                            if (!m || !m[1]) return null;
                            return m[1];
                        },
                        src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: function (url) {
                            var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
                            if (!m || !m[5]) return null;
                            return m[5];
                        },
                        src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                    }
                }
            }
        });
    </script>


</div>
<!-- Wrapper / End -->
</body>
</html>
