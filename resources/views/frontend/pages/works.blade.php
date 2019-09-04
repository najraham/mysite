@extends('frontend.layouts.layout')

@section('content')
    
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>wo<span>rks</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    {{-- projects --}}

    <!--::our_service part start::-->
    <section class="our_service padding_top">
        <div class="container">
            <div class="row align-items-center">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_offer_img d-none d-md-block">
                            <img src="{{asset('storage/images/'.$project->image)}}" style="width:500px" alt="">
                        </div>
                        <div class="single_offer_text text-center wedding">
                            <span class=""></span>
                            {{-- title --}}
                            <h4>{{$project->title}}</h4>
                            {{-- short description
                            <p>World the end of summer the sweltering heat makes human
                                sweat in the night and man plants and trees wilt even</p> --}}
                            <a href="{{$project->link}}" class="btn_1">read more</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--::our_service part end::-->

    <!--::pricing part start::-->
    <section class="pricing_part section_padding">
        <div class="container">
            <section class="breadcrumb breadcrumb_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb_iner text-center">
                                <div class="breadcrumb_iner_item">
                                    <h2>ski<span>lls</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row justify-content-center">
                @foreach ($skills as $skill)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_pricing_part">
                            <div class="pricing_tittle">
                                <i class="ti-crown" style="font-size:50px;"></i>
                                {{-- name --}}
                                <p>{{$skill->name}}</p>
                            </div>
                            {{-- percentage --}}
                            <div class="percentage">
                                <div class="progress">
                                <div class="progress-bar color-1" role="progressbar" style="width:{{$skill->percentage}}%; background-color: #ff4800"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--::pricing part end::-->
    
@endsection