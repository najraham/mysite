<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$title}}</title>
    <link rel="icon" href="{{asset('frontend/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/swiper.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <style>
        @if(strcmp($title , 'Index') == 0)
            .banner_part {
                position: relative;
                background-image: url('{{asset("storage/images/".$index->image)}}');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
        @endif
        
        .section_padding {
            padding: 40px 0px;
        }

        .padding_top {
            padding-top: 20px;
        }

        .intro_video_bg {
            background-image: url("{{asset('frontend/img/intro_video_bg.png')}}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 550px;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
        }
    </style>
    
</head>

<body>

    @include('frontend.includes.header')

    @yield('content')

    @include('frontend.includes.footer')

    <!-- jquery plugins here-->
    <script src="{{asset('frontend/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('frontend/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('frontend/js/jquery.filterizr.min.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/js/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/contact.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.form.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('frontend/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>
</body>

</html>