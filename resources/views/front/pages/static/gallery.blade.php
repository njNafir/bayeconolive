@section('title') Home @stop
@extends('front.layout.master')
@section('content')

    <!-- END SECTION HEADINGS -->
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Gallery</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Gallery</h2>
            </div>
        </div>
    </section>

    <!-- START SECTION PROPERTIES LISTING -->
    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="headings-2 p-0">
                            </section>
                            <!-- main slider carousel items -->
                            <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                <h5 class="mb-4">Gallery</h5>
                                <div class="carousel-inner">
                                    @php $i = 0; @endphp
                                    @foreach(\App\Models\Gallery::active()->get() as $gallery)
                                        <div class="@if($loop->first) active @endif item carousel-item" data-slide-number="{{ $i }}">
                                            <img src="{{ asset('uploads/galleries/' . $gallery->image) }}" class="img-fluid shb" alt="slider-listing">
                                        </div>
                                        @php $i++; @endphp
                                    @endforeach


                                    {{-- <div class="active item carousel-item" data-slide-number="0">
                                        <img src="/front/images/single-property/s-1.jpg" class="img-fluid shb" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="1">
                                        <img src="/front/images/single-property/s-2.jpg" class="img-fluid shb" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="2">
                                        <img src="/front/images/single-property/s-3.jpg" class="img-fluid shb" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="4">
                                        <img src="/front/images/single-property/s-4.jpg" class="img-fluid shb" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="5">
                                        <img src="/front/images/single-property/s-5.jpg" class="img-fluid shb" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="4">
                                        <img src="/front/images/single-property/s-6.jpg" class="img-fluid shb" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="5">
                                        <img src="/front/images/single-property/s-3.jpg" class="img-fluid shb" alt="slider-listing">
                                    </div> --}}

                                    <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                </div>
                                <!-- main slider carousel nav controls -->
                                <ul class="carousel-indicators smail-listing list-inline">

                                    @php $i = 0; @endphp
                                    @foreach(\App\Models\Gallery::active()->get() as $gallery)

                                        <li class="list-inline-item @if($loop->first) active @endif">
                                            <a id="carousel-selector-{{ $i }}" @if($loop->first) class="selected" @endif data-slide-to="{{ $i }}" data-target="#listingDetailsSlider">
                                                <img src="{{ asset('uploads/galleries/' . $gallery->image) }}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        @php $i++; @endphp
                                    @endforeach

                                    {{-- 
                                    <li class="list-inline-item active">
                                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                            <img src="/front/images/single-property/s-1.jpg" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                            <img src="/front/images/single-property/s-2.jpg" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                            <img src="/front/images/single-property/s-3.jpg" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                                            <img src="/front/images/single-property/s-4.jpg" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                                            <img src="/front/images/single-property/s-5.jpg" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                                            <img src="/front/images/single-property/s-6.jpg" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                                            <img src="/front/images/single-property/s-3.jpg" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li> --}}
                                </ul>
                                <!-- main slider carousel items -->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->
@endsection    