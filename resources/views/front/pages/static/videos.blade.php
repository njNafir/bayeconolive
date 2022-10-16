@section('title') Video Gallery @stop
@extends('front.layout.master-inner')
@section('content-inner')
    <!-- START SECTION ABOUT -->
    <section class="about-us fh">
        <div class="container">
            {{-- <div>
                <h2 class="text-left mb-4">Coming Soon</span></h2>
            </div> --}}
            <div>
                <h2 class="text-left mb-4">Video <span>Gallery</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
                    <div class="video-wrapper">
                        <a class="popup-yt d-flex justify-content-center"
                           href="/uploads/videos/bez.mp4"
                           data-effect="fadeIn">
                            <img src="/front/images/bg/bg-15.jpg" class="" style="width: 100% !important;">
                            <span class="video-play-button align-self-center">
                              <span></span>
                        </span>

                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
                    <div class="video-wrapper">
                        <a class="popup-yt d-flex justify-content-center"
                           href="/uploads/videos/bez_beza.mp4"
                           data-effect="fadeIn">
                            <img src="/front/images/bg/bg-15.jpg" class="" style="width: 100% !important;">
                            <span class="video-play-button align-self-center">
                              <span></span>
                        </span>

                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
                    <div class="video-wrapper">
                        <a class="popup-yt d-flex justify-content-center"
                           href="/uploads/videos/bez_3d.mp4"
                           data-effect="fadeIn">
                            <img src="/front/images/bg/bg-15.jpg" class="" style="width: 100% !important;">
                            <span class="video-play-button align-self-center">
                              <span></span>
                        </span>

                        </a>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
                    <div class="video-wrapper">
                        <a class="popup-yt d-flex justify-content-center"
                           href="https://www.youtube.com/watch?v=x40a0OJuEi4"
                           data-effect="fadeIn">
                            <img src="/front/images/bg/bg-15.jpg" class="" style="width: 100% !important;">
                            <span class="video-play-button align-self-center">
                              <span></span>
                        </span>

                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
                    <div class="video-wrapper">
                        <a class="popup-yt d-flex justify-content-center"
                           href="https://www.youtube.com/watch?v=x40a0OJuEi4"
                           data-effect="fadeIn">
                            <img src="/front/images/bg/bg-15.jpg" class="" style="width: 100% !important;">
                            <span class="video-play-button align-self-center">
                              <span></span>
                        </span>

                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
                    <div class="video-wrapper">
                        <a class="popup-yt d-flex justify-content-center"
                           href="https://www.youtube.com/watch?v=x40a0OJuEi4"
                           data-effect="fadeIn">
                            <img src="/front/images/bg/bg-15.jpg" class="" style="width: 100% !important;">
                            <span class="video-play-button align-self-center">
                              <span></span>
                        </span>

                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT -->
@endsection
