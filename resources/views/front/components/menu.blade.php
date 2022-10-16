<li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
<li class="{{ (request()->is('page/about_us')) ? 'active' : '' }}"><a href="{{ url('/page/about_us') }}">About Us</a></li>
<li class="{{ (request()->is('page/facilities')) ? 'active' : '' }}"><a href="{{ url('/page/facilities') }}">Facilities & Incentives</a></li>


<li class="{{ (request()->is('page/explore') || request()->is('page/important_links'))  ? 'active' : '' }}"><a href="#">Services</a>
    <ul>
        <li class="{{ (request()->is('page/explore')) ? : '' }}"><a href="{{ url('/page/explore') }}">Explore</a></li>
        <li class="{{ (request()->is('page/explore')) ?  : '' }}"><a href="{{ asset('uploads/brochure/brochure.zip') }}">Download Brochure</a></li>
        <li class="{{ (request()->is('page/important_links')) ? : '' }}"><a href="{{ url('/page/important_links') }}">Important Links</a></li>
    </ul>
</li>

<li class="{{ (request()->is('page/gallery') || request()->is('page/videos')) ? 'active' : '' }}"><a href="#">Gallery</a>
    <ul>
        <li class="{{ (request()->is('page/gallery')) }}"><a href="{{ url('/page/gallery') }}">Photo Gallery</a></li>
        <li class="{{ (request()->is('page/videos')) }}"><a href="{{ url('/page/videos') }}">Video Gallery</a></li>
    </ul>
</li>
<li class="{{ (request()->is('blogs')) ? 'active' : '' }}"><a href="{{ action('WebController@blogs') }}">News & Events</a></li>
<li class="{{ (request()->is('page/investor')) ? 'active' : '' }}"><a href="{{ url('/page/investor') }}">Request Investor</a></li>
<li class="{{ (request()->is('page/contact')) ? 'active' : '' }}"><a href="{{ url('/page/contact') }}">Contact</a></li>
{{-- <li><a href="{{ url('/login') }}">Login</a></li> --}}
{{-- {!! \App\Menu::show_menu('header-menu') !!} --}}

