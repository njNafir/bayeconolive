@section('title') Contact Us @stop
@extends('front.layout.master')
@section('content')

    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Blog</h1>
                <h2><a href="{{ url('/') }}">Home </a> &nbsp;/&nbsp; Blog</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION BLOG -->
    <section class="blog blog-section">
        <div class="container">
{{--            <div>--}}
{{--                <h2 class="text-left mb-4">Coming Soon</span></h2>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-lg-9 col-md-12 col-xs-12">
                    <div class="row">
                        @foreach($blogs as $blog)

                            <div class="col-md-12 col-xs-12 mb-4">
                                <div class="news-item news-item-sm">
                                    <a href="{{ action('WebController@blog_show', $blog->id )}}" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="resp-img" src="{{ asset('/uploads/blogs/'. $blog->image )}}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="{{ action('WebController@blog_show', $blog->id )}}"><h3>{{ $blog->title }}</h3></a>
                                        <div class="dates">
                                            <span class="date">{{ formated_date($blog->created_at) }}</span>
                                             <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr">
                                            <p>{!! $blog->description !!}</p>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="{{ action('WebController@blog_show', $blog->id )}}" class="news-link">Read more...</a>
                                             <div class="admin">
{{--                                                <p>By, Karl Smith</p>--}}
{{--                                                <img src="/front/images/testimonials/ts-1.jpg" alt="">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <aside class="col-lg-3 col-md-12">
                    @include('front.pages.blogs.sidebar')
                </aside>
            </div>

            @include('adminlte-templates::common.paginate', ['records' => $blogs])
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection
