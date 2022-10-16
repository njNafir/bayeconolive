@section('title') Blogs | {{$blog->title}} @stop
@extends('front.layout.master-inner')
@section('content-inner')
    <!-- START SECTION BLOG -->
    <section class="blog blog-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="news-item details no-mb2">
                                <a href="#" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{ asset('/uploads/blogs/'. $blog->image )}}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text details pb-0">
                                    <a href="blog-details.html"><h3>{{ $blog->title }}</h3></a>
                                    <div class="dates">
                                        <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                    </div>
                                    <div class="news-item-descr big-news details visib mb-0">
                                        {!! $blog->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-lg-3 col-md-12">
                    @include('front.pages.blogs.sidebar')
                </aside>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection