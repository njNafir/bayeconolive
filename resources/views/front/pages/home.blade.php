@section('title') Home @stop
@extends('front.layout.master')
@section('content')
    
    @if(\App\Models\Slider::count())
        <!-- Slider -->
        <div class="main-slider style-two default-banner slide2">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <div id="rev_slider_328_1" class="rev_slider fullwidthabanner" style="display:none;"
                         data-version="5.4.8">
                        <ul>
                            @foreach(\App\Models\Slider::active()->get() as $slider)
                                <!-- SLIDE  -->
                                <li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                    data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                                    data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off"
                                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4=""
                                    data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                    data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}"
                                    data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('uploads/sliders/' . $slider->image) }}" alt="" title="" data-bgposition="right center"
                                         data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone"
                                         data-scalestart="110" data-scaleend="110" data-rotatestart="0" data-rotateend="0"
                                         data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="300 0"
                                         data-bgparallax="8" class="rev-slidebg" data-no-retina>


                                </li>
                            @endforeach
                            <!-- SLIDE  -->
                             {{-- <li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                                data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off"
                                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4=""
                                data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}"
                                data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="/front/images/slider/slider-2.jpg" alt="" title="" data-bgposition="right center"
                                     data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone"
                                     data-scalestart="110" data-scaleend="110" data-rotatestart="0" data-rotateend="0"
                                     data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="300 0"
                                     data-bgparallax="8" class="rev-slidebg" data-no-retina>


                            </li>  --}}
                        </ul>
                         <div style="" class="tp-static-layers">
                            <!-- LAYER NR. 78 -->
                            <div class="tp-caption have tp-shape tp-shapewrapper tp-resizeme re-shadow2 re-overflow tp-static-layer"
                                 id="slider-328-layer-31" data-x="['right','right','right','right']"
                                 data-hoffset="['55','55','55','55']" data-y="['bottom','bottom','bottom','bottom']"
                                 data-voffset="['100','100','100','100']" data-width="130" data-height="130"
                                 data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="shape"
                                 data-basealign="slide" data-responsive_offset="on" data-startslide="0" data-endslide="2"
                                 data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                 style="z-index: 14;background-color:rgb(255,255,255);border-color:rgb(255,255,255);border-style:solid;border-width:5px 5px 5px 5px;border-radius:100px;">
                                <div class="tp-element-background"
                                     style=" background: url('/front/images/logo-bay-economy-popup.png') no-repeat center center; background-size: cover; opacity: 1; border-radius:100px;">
                                </div>
                            </div>
                            <!-- LAYER NR. 80 -->
                            <div class="tp-caption have   tp-resizeme re-shadow2 tp-static-layer" id="slider-328-layer-33"
                                 data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['220','220','220','220']"
                                 data-width="180" data-height="none" data-whitespace="nowrap"
                                 data-visibility="['on','on','on','off']" data-type="text" data-basealign="slide"
                                 data-responsive_offset="on" data-startslide="0" data-endslide="2"
                                 data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[20,20,20,20]" data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[20,20,20,20]"
                                 style="z-index: 16; min-width: 180px; max-width: 180px; white-space: nowrap; font-size: 15px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px;font-family:Roboto;background-color:rgb(255,255,255);border-radius:5px 5px 5px 5px;">
                                <div class="rs-looped rs-slideloop" data-easing="Expo.easeInOut" data-speed="1" data-xs="0"
                                     data-xe="0" data-ys="-5" data-ye="5">
                                    Have a Question?
                                    <br/>
                                    <i class="fa fa-phone" style="margin-right:7px"></i>
                                    <a class="tp-phonenum"> +88028129302</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider END -->
        <!-- Main Slider -->
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION SERVICES -->
        <section class="services-home">
            <div class="container">
                <div class="section-title">
                    <h3>Who</h3>
                    <h2>We are</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-12 m-top-0 m-bottom-40">
                        <div class="service bg-light-22 border-1 border-light box-shadow-1 box-shadow-2-hover">
                            <div class="media">
                                <i class="fa fa-home bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                            </div>
                            <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                                <h4 class="m-bottom-15 text-bold-700">MISSION</h4>
                                <p>To establish and operate Bay Economic Zone as a world class facility for our valued investors and stakeholders by serving as a pioneer Private Economic Zone for the sustainable growth of Bangladesh.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 m-top-40 m-bottom-40">
                        <div class="service bg-light-22 border-1 border-light box-shadow-1 box-shadow-2-hover">
                            <div class="media">
                                <i class="fas fa-building bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                            </div>
                            <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                                <h4 class="m-bottom-15 text-bold-700">VISION</h4>
                                <p>To become the global ambassador for Bangladesh and a catalyst for the economic and social development of our country, thereby transforming Bangladesh into a mid income country by 2021 and a developed country by 2041 through the establishment and continuation of world class customer services at our state of art facilities.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 m-top-40 m-bottom-40 commercial">
                        <div class="service bg-light-22 border-1 border-light box-shadow-1 box-shadow-2-hover">
                            <div class="media">
                                <i class="fas fa-warehouse bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                            </div>
                            <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                                <h4 class="m-bottom-15 text-bold-700">OBJECTIVES</h4>
                                <p>The main objective of Bay Economic Zone is to develop state-of-the art infrastructure facilities and professional management services to attract and support investments (foreign as well as local) in proposed Economic Zone in line with Government goal to boost up the economic activities through industrialization, creation of employment and development of life-style.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 m-top-40 m-bottom-40 commercial">
                        <div class="service bg-light-22 border-1 border-light box-shadow-1 box-shadow-2-hover">
                            <div class="media">
                                <i class="fab fa-accusoft bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                            </div>
                            <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                                <h4 class="m-bottom-15 text-bold-700">CORE VALUES</h4>
                                <p>• Nurturing and serving the needs of all people (employees, customers, and those in our community) while providing them with the opportunities to reach their full potential.
                                    • Structuring, implementing and applying world-class policies for the development and operation of our economic zone for the benefit of all our stakeholders.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION SERVICES -->

        <!-- START SECTION INFO-HELP -->
        <section class="info-help h18">
            <div class="container">
                <div class="row info-head">
                    <div class="col-lg-12 col-md-8 col-xs-8">
                        <div class="info-text">
                            <h3 class="text-center mb-0">Why Invest in Bangladesh</h3>
    {{--                        <p class="text-center mb-4 p-0">We offer perfect real estate services</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION INFO-HELP -->

        <!-- START SECTION INFO -->
        <section _ngcontent-bgi-c3="" class="featured-boxes-area bg-white-1 pb-5">
            <div _ngcontent-bgi-c3="" class="container">
                <div _ngcontent-bgi-c3="" class="featured-boxes-inner">
                    <div _ngcontent-bgi-c3="" class="row m-0">
                        <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0">
                            <div _ngcontent-bgi-c3="" class="single-featured-box">
                                <div _ngcontent-bgi-c3="" class="icon color-fb7756"><img src="/front/images/icons/i-1.svg"
                                                                                         width="85" height="85" alt="">
                                </div>
                                <h3 _ngcontent-bgi-c3="" class="mt-5">Economic and Social Highlights</h3>
                                <p _ngcontent-bgi-c3="">Consistent GDP Growth Rate(last one decade) 6.0% <br>
                                    Per Capita GNI $1,940<br>
                                    Annual FDI Inflows $ 1.7 Billion.</p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                                                            href="{{ url('/page/explore') }}">Read More</a>
                            </div>
                        </div>
                        <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0">
                            <div _ngcontent-bgi-c3="" class="single-featured-box">
                                <div _ngcontent-bgi-c3="" class="icon color-1ac0c6"><img src="/front/images/icons/i-3.svg"
                                                                                         width="85" height="85" alt="">
                                </div>
                                <h3 _ngcontent-bgi-c3="" class="mt-5">Why in Bangladesh</h3>
                                <p _ngcontent-bgi-c3="">Current performance of existing export processing zones (18%+ of national exports & 0.4 million employments) is favorable and encouraging.</p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                                                                                                                                                                                         href="{{ url('/page/explore') }}">Read More</a></div>
                        </div>
                        <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0">
                            <div _ngcontent-bgi-c3="" class="single-featured-box">
                                <div _ngcontent-bgi-c3="" class="icon color-facd60"><img src="/front/images/icons/i-2.svg"
                                                                                         width="85" height="85" alt="">
                                </div>
                                <h3 _ngcontent-bgi-c3="" class="mt-5">Why in Economic Zone</h3>
                                <p _ngcontent-bgi-c3="">All existing 8 EPZs are almost fully occupied with tenants; but contributions of Industry and Service sectors to GDP are increasing.</p><a
                                    _ngcontent-bgi-c3="" class="read-more-btn" href="{{ url('/page/explore') }}">Read More</a>
                            </div>
                        </div>
                        <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0">
                            <div _ngcontent-bgi-c3="" class="single-featured-box">
                                <div _ngcontent-bgi-c3="" class="icon"><img src="/front/images/icons/i-4.svg" width="85"
                                                                            height="85" alt=""></div>
                                <h3 _ngcontent-bgi-c3="" class="mt-5">Competitive Incentives</h3>
                                <p _ngcontent-bgi-c3="">100% Income tax exemption on capital gains from transfer of shares for 10 years.</p>
                                <a _ngcontent-bgi-c3="" class="read-more-btn" href="{{ url('/page/explore') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION INFO -->

        <!-- START SECTION WHY CHOOSE US -->
        <!--
        <section class="how-it-works bg-white-1">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="/front/images/icons/i-5.svg" alt="">
                                <h3>Wide Renge Of Properties</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">Common Warehousing facilities <br>
                                    Rooftop / vertical Helipad form commercial chopper carrying emergency passengers <br>
                                    Roads and utility services (Power, Gas and Water)</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="/front/images/icons/i-6.svg" alt="">
                                <h3>Trusted by thousands</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">Commercial facilities service ( Financial institutions, retail shops,
                                    exhibition centers, R & D facilities, restaurants & recreation centers etc.)</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="/front/images/icons/i-7.svg" alt="">
                                <h3>Financing made easy</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center"> Unsystematic industrialization in and around Dhaka city without special incentive package; excessive pressure of people on Dhaka with huge traffic jam and environmental degradation.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        -->
        <!-- END SECTION WHY CHOOSE US -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Our </span>Sister Concern</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">

                    @foreach(\App\Models\Partner::latest()->active()->get() as $partner)
                        <div class="owl-item"><img src="{{ asset('/uploads/partners/'. $partner->image )}}" alt=""></div>
                    @endforeach

                        {{--
                            <div class="owl-item"><img src="/front/images/partners/1.png" alt=""></div>
                            <div class="owl-item"><img src="/front/images/partners/bayit.png" alt=""></div>
                            <div class="owl-item"><img src="/front/images/partners/bayemp.jpg" alt=""></div>
                            <div class="owl-item"><img src="/front/images/partners/2.png" alt=""></div>
                            <div class="owl-item"><img src="/front/images/partners/3.png" alt=""></div>
                            <div class="owl-item"><img src="/front/images/partners/4.png" alt=""></div>
                            <div class="owl-item"><img src="/front/images/partners/5.png" alt=""></div>
                            <div class="owl-item"><img src="/front/images/partners/6.png" alt=""></div>
                        --}}
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->

        <!-- START SECTION AGENTS -->
        <section class="team bg-white-1">
            <div class="container">
                <div class="section-title col-md-5">
                    <h3>Meet Our</h3>
                    <h2>Management Team</h2>
                </div>
                <div class="row team-all">

                    @foreach(\App\Models\Member::active()->get() as $member)
                        <div class="col-lg-3 col-md-6 team-pro">
                            <div class="team-wrap">
                                <div class="team-img">
                                    <img src="{{ asset('uploads/members/' . $member->image) }}" alt=""/>
                                </div>
                                <div class="team-content">
                                    <div class="team-info">
                                        <h3>{{ $member->name }}</h3>
                                        <p>{{ $member->position }}</p>
                                        <span><a href="{{ action('WebController@member_show', $member->id )}}">View Profile</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--
                     <div class="col-lg-3 col-md-6 team-pro">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="/front/images/team/team-zia.png" alt=""/>
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>MR. ZIAUR RAHMAN</h3>
                                    <p>Managing Director</p>
                                    <span><a href="#">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team-pro">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="/front/images/team/team-zia.png" alt=""/>
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>MR. ZIAUR RAHMAN</h3>
                                    <p>Managing Director</p>
                                    <span><a href="#">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team-pro">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="/front/images/team/team-zia.png" alt=""/>
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>MR. ZIAUR RAHMAN</h3>
                                    <p>Managing Director</p>
                                    <span><a href="#">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
    -->
                </div>
            </div>
        </section>
        <!-- END SECTION AGENTS -->

        <!-- START SECTION COUNTER UP -->
        {{--<section class="counterup">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">65</p>
                                <h3>Proposed land (In acres)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">88</p>
                                <h3>Investment (In million)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr mb-0">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">02</p>
                                <h3>Operational industries</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr mb-0 last">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">975</p>
                                <h3>Employment Erected</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}
        <!-- END SECTION COUNTER UP -->

        <!-- START SECTION BLOG -->

        <section class="blog-section bg-white-2">
            <div class="container">
                <div class="section-title">
                    <h3>Latest</h3>
                    <h2>News</h2>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        @foreach(\App\Models\Blog::latest()->active()->limit(3)->get() as $blog)

                            <div class="col-xl-4 col-md-6 col-xs-12">
                                <div class="news-item">
                                    <a href="{{ action('WebController@blog_show', $blog->id )}}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="img-responsive" src="{{ asset('/uploads/blogs/'. $blog->image )}}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="{{ action('WebController@blog_show', $blog->id )}}"><h3>{{ $blog->title }}</h3></a>
                                        <div class="dates">
                                            <span class="date">{{ formated_date($blog->created_at) }}</span>
                                        </div>
                                        <div class="news-item-descr big-news">
                                            <p>{!! \Illuminate\Support\Str::limit(strip_tags($blog->description), $limit = 120, $end = '...') !!}</p>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="{{ action('WebController@blog_show', $blog->id )}}" class="news-link">Read more...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- END SECTION BLOG -->
    @endif    
@endsection
