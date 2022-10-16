@section('title') Contact Us @stop
@extends('front.layout.master')
@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Contact Us</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Contact Us</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION CONTACT US -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h3 class="mb-4">Contact Us</h3>
                    @include('components.errors')
                    <form id="mycontactform" class="contact-form" method="post" novalidate action="{{ action('WebController@contact_store') }}">
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 bgc">
                    <div class="call-info">
                        <h3>Contact Details</h3>
                        <p class="mb-5">Please find below contact details and contact us today!</p>
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
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT US -->
@endsection
