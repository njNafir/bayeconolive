@section('title') Contact Us @stop
@extends('front.layout.master')
@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>@yield('title')</h1>
                <h2><a href="{{ url('/')}} ">Home </a> &nbsp;/&nbsp; @yield('title')</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->
    @yield('content-inner')
@endsection

