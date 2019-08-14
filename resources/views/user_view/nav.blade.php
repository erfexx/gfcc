<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-md-6 col-xs-1 col-xl-2">
                <a href="{{route('home')}}"><img src="{{asset('user_view/images/logo.png')}}" class="site-logo" width="40%" ></a>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    @if($page == 'home')
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="#home-section" class="nav-link">Home</a></li>
                        <li><a href="#about-section" class="nav-link">About Us</a></li>
                        <li><a href="#team-section" class="nav-link">Team</a></li>
                        <li><a href="#media-section" class="nav-link">Media</a></li>
                        <li><a href="#services-section" class="nav-link">Services</a></li>
                        <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                        <li><a href="#blog-section" class="nav-link">Blog</a></li>
                        <li><a href="#contact-section" class="nav-link">Contact</a></li>
                    </ul>
                    @else
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{url('/')}}" class="nav-link">Home</a></li>
                            <li><a href="{{url('/')}}/#about-section" class="nav-link">About Us</a></li>
                            <li><a href="{{url('/')}}/#team-section" class="nav-link">Team</a></li>
                            <li><a href="{{url('/')}}/#media-section" class="nav-link">Media</a></li>
                            <li><a href="{{url('/')}}/#services-section" class="nav-link">Services</a></li>
                            <li><a href="{{url('/')}}/#testimonials-section" class="nav-link">Testimonials</a></li>
                            <li><a href="{{url('/')}}/#blog-section" class="nav-link">Blog</a></li>
                            <li><a href="{{url('/')}}/#contact-section" class="nav-link">Contact</a></li>
                        </ul>
                    @endif
                </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
    </div>
</header>