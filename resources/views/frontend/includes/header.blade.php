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
                                <a class="nav-link" href="{{route('show_index_page')}}">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('show_about_page')}}">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('show_works_page')}}">works</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{route('show_portfolio_page')}}">portfolio</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('show_blog_page')}}">blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('show_contact_page')}}">contact</a>
                            </li>
                        </ul>
                    </div>
                   
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->