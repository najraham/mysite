@extends('frontend.layouts.layout')

@section('content')
    
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item ">
                            <h2>about <span>me</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::about_us part start::-->
    <section class="about_us section_padding ">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_text text-center mt--2">
                        {{-- heading --}}
                        <h2>{{$about->title}}</h2>
                        {{-- description --}}
                        <p>{{$about->description}}</p>
                        <a href="#" class="btn_2">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::about_us part end::-->

    <!-- intro_video_bg start-->
    {{-- <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <h2>Our project video</h2>
                        <div class="intro_video_icon">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                                href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="ti-control-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- intro_video_bg part start-->

    <!--::review_part part start::-->
    <section class="review_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="review_img">
                        <img width="450px" height="450px" src="{{asset('frontend/img/review_bg.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="review_slider owl-carousel">
                        @foreach ($reviews as $review)
                            <div class="review_part_text">
                                {{-- heading --}}
                                <h2>{{$review->heading}}</h2>
                                {{-- description --}}
                                <p>{{$review->description}}</p>
                                <h3>Mitchel Jeferson, <span>CEO of softking</span> </h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part part end::-->

@endsection
