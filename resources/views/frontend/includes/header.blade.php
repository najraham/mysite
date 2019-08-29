<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <img src="{{asset('frontend/img/logo.png')}}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('show_index_page')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('show_about_page')}}">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('show_services_page')}}">services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownpro"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    portfolio
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownpro">
                                    <a class="dropdown-item" href="{{route('show_portfolio_page')}}">portfolio</a>
                                    {{-- <a class="dropdown-item" href="portfolio_details.html">portfolio details</a> --}}
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('show_blog_page')}}" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('show_blog_page')}}"> blog</a>
                                    <a class="dropdown-item" href="{{route('show_single_blog_page')}}">Single blog</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" href="elements.html">Elements</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('show_contact_page')}}">contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown cart">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-bag"></i>
                        </a>
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="single_product">

                                </div>
                            </div> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->