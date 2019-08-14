@if($page == 'home')
    <div class="site-blocks-cover overlay" style="background-image: url({{asset('user_view/images/cover2.jpg')}});" data-aos="fade" id="home-section">
    @elseif($page == 'blog')
            <div class="site-blocks-cover overlay" style="background-image: url({{asset(asset('user_view/images/cover3.jpg'))}});" data-aos="fade" id="home-section">
    @else
                    <div class="site-blocks-cover overlay" style="background-image: url({{asset(asset('user_view/images/cover.jpg'))}});" data-aos="fade" id="home-section">
    @endif
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-md-12 mt-lg-5 text-center">
                <h1>GENERATION FOR CHRIST COMMUNITY</h1>
                @if($page == 'home' || $page == 'blog')
                <div>
                    <a href="{{route('join')}}" class="btn btn-primary mr-2 mb-2">Join GFC</a>
                </div>
                @endif
            </div>

        </div>
    </div>
</div>