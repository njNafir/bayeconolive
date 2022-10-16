@section('title') Members | {{$member->name}} @stop
@extends('front.layout.master-inner')
@section('content-inner')
    <!-- START SECTION BLOG -->
    <section class="blog blog-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="news-item-img">
                        <img class="img-responsive" src="{{ asset('/uploads/members/'. $member->image )}}" alt="blog image">
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 blog-pots">
                    <h1>{{ $member->name }}</h1>
                    <h2>{{ $member->position }}</h2>
                    <h4>{{ $member->intro }}</h4>
                    <p>{!! $member->description !!}</p>
                </div>

            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection