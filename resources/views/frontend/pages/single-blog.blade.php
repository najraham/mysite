@extends('frontend.layouts.layout')

@section('content')
    
   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                     <h2><span>{{$blog->title}}</span></h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset('frontend/img/blog/'.$blog->image)}}" alt="">
                  </div>
                  <div class="blog_details">
                     <ul class="blog-info-link mt-3 mb-4">
                        {{-- user --}}
                        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                     </ul>
                     <div class="quote-wrapper">
                        <div class="quotes">
                          <p>{{$blog->body}}</p>
                        </div>
                     </div>
                     <p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

   @endsection