<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{getAppName()}}</title>
    <meta name="description" content="Provide the power to your co-workers to connect with your community with a modern & powerful chat system with enriching features like real-time messages, media uploads, read receipt, user presence and much more.">
    <meta name="keyword" content="CoreUI,Bootstrap,Admin,Template,InfyOm,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{getFaviconUrl()}}">
    <!-- google font -->
    <link href="//fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <!-- font awesome version 4.7 -->
    <link rel="stylesheet" href="{{ mix('assets/css/font-awesome.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ mix('assets/css/landing-page-style.css') }}">
</head>
<body>
<!--header start-->
<header class="header">
    <div class="header__container container d-flex align-items-center">
        <div class="header__logo-brand">
            <img src="{{ mix('img/telemedicine-logo-black.png') }}" alt="logo-image" class="header__logo">
            {{-- <span class="header__brand-name">{{getAppName()}}</span> --}}
        </div>
        <div class="header__bar">
            <i class="fa fa-bars" aria-hidden="true" id="barIcon"></i>
        </div>
        <div class="header__collapsible ml-auto align-items-center" id="collapsedNav">
            <nav>
                @auth
                    <a href="{{ url('/conversations') }}" class="header__link">{{ __('messages.chat') }}</a>
                @else
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="header__link">Masuk</a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="header__link">Daftar</a>
                    @endif
                @endauth
            </nav>
        </div>
    </div>
</header>
<!--header over-->
<!--landing section-->
<section class="landing d-flex align-items-center">
    <div class="landing__illustration">
        <img src="{{asset('img/slider1.png')}}" height="500px" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h1 class="landing__heading">{{ getAppName() }}</h1>
                <div class="landing__sub-heading">Lebih dekat dengan kami</div>
                <p class="landing__description">
                    Konsultasikan kesehatan anda dari jarak jauh bersama Dokter Ahli kami secara Gratis tanpa dipungut biaya.
                </p>
                <button class="landing__get-start-btn primary-btn btn text-white" onclick="window.location.href='{{ route('register') }}'">
                    Daftar Sekarang
                </button>
            </div>
            <div class="col-12 landing__responsive-col">
                <img src="{{asset('img/slider1.png')}}" alt="landing image" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!--feature section-->
<section class="feature section-spacing-bottom">
    <div class="container">
        <div class="row">
            <div class="feature__box-col col-12 col-sm-6 col-lg-3">
                <div class="feature__box text-center">
                    <i class="fa fa-grav" aria-hidden="true"></i>
                    <div class="feature__box-title">User Friendly</div>
                    <p>Mudah diakses oleh pengguna baru</p>
                </div>
            </div>
            <div class="feature__box-col col-12 col-sm-6 col-lg-3">
                <div class="feature__box text-center">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                    <div class="feature__box-title">Realtime Chat</div>
                    <p>Percakapan secara langsung</p>
                </div>
            </div>
            <div class="feature__box-col  col-sm-6 col-lg-3">
                <div class="feature__box text-center">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <div class="feature__box-title">Privacy</div>
                    <p>Percakapan End to End</p>
                </div>
            </div>
            <div class="feature__box-col col-12 col-sm-6 col-lg-3">
                <div class="feature__box text-center">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <div class="feature__box-title">Expert Doctor</div>
                    <p>Dokter ahli kami akan merespon chat anda segera</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature section-->
<!--feature-brief-->
{{-- <section class="feature-brief section-spacing-bottom section-spacing-top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="text-uppercase feature-brief__semi-heading">
                    <i class="fa fa-certificate" aria-hidden="true"></i>{{ __('messages.features') }}
                </div>
                <div class="feature-brief__heading">
                    {{ __('messages.infy_chat_features') }}
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Super Admin panel to manage members
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Real-time messaging
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> 1-1 Chat
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Group Chat
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Conversations list with unread messages count
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Private vs Public Groups
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Open vs Closed Groups
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Manage Group Members (Make Admin, Add / Remove
                    Member)
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Media Uploads including Images, Documents,
                    Audio, and Videos
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Block/Unblock User & Delete Conversations and
                    Delete Message
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Emoji Support and Abuse Word Filtering
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Online Offline Status and Read receipt
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Last seen status of a user
                </div>
                <div class="feature-brief__list-item">
                    <i class="fa fa-circle-thin" aria-hidden="true"></i> Web Push Notifications with OneSignal
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex feature-brief__img-wrapper">
                <img src="{{asset('assets/images/chat-landing2.png')}}" alt="{{ __('messages.infy_chat_features') }}"
                     class="img-fluid mt-auto">
            </div>
        </div>
    </div>
</section> --}}
<!--/feature-brief-->

<!--testimonials-->
<section class="testimonials section-spacing-bottom section-spacing-top">
    <div class="text-center text-uppercase testimonials__section-title">Testimoni</div>
    <div class="container">
        <div class="testimonials__heading text-center">Apa kata mereka?</div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="testimonials__box">
                    <div class="testimonials__user-img">
                        <img src="{{asset('assets/images/team-3.jpg')}}" alt="">
                    </div>
                    <div class="testimonials__user-name text-uppercase">
                        {{ __('messages.customer_1') }}
                    </div>
                    <div class="testimonials__user-ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="testimonials__user-comment">
                        {{ __('messages.customer_1_review') }}
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="testimonials__box">
                    <div class="testimonials__user-img">
                        <img src="{{asset('assets/images/team-3.jpg')}}" alt="">
                    </div>
                    <div class="testimonials__user-name text-uppercase">
                        {{ __('messages.customer_2') }}
                    </div>
                    <div class="testimonials__user-ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="testimonials__user-comment">
                        {{ __('messages.customer_2_review') }}
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="testimonials__box">
                    <div class="testimonials__user-img">
                        <img src="{{asset('assets/images/team-3.jpg')}}" alt="">
                    </div>
                    <div class="testimonials__user-name text-uppercase">
                        {{ __('messages.customer_3') }}
                    </div>
                    <div class="testimonials__user-ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="testimonials__user-comment">
                        {{ __('messages.customer_3_review') }}
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
</section>
<!--/testimonials-->
<!--start-using -->
{{-- <section class="start-using-now section-spacing-top section-spacing-bottom">
    <div class="start-using-now__inner section-spacing-top section-spacing-bottom">
        <div class="start-using-now__content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1 class="start-using-now__heading">{{ __('messages.start_using_infychat_now') }}</h1>
                        <p>{{ __('messages.start_using_infychat_now_desc') }}</p>
                        <button class="start-using-now__get-start-btn primary-btn btn text-white">
                            {{ __('messages.get_started') }}
                        </button>
                    </div>
                    <div class="col-12 col-lg-6 d-flex start-using-now__img-wrapper">
                        <img src="{{asset('assets/images/chat-landing1.png')}}" alt="chat image" class="img-fluid mt-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--/ start-using -->
<!--footer-->
<footer class="footer">
    <div class="footer__container container">
        <div class="row">
            <div class="col-md-4">
                <h4>Our Company</h4>
                <img src="{{ asset('img/landing-logotext.png') }}" alt=""><br><br>
                <img src="{{ asset('img/KARS Bintang 2.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <h4>Ikuti kami</h4>
                <p>
                    <li>
                        <a href="https://twitter.com/pkusukoharjo/" target="_blank">Twitter</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/pku.sukoharjo/" target="_blank">Facebook</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/pku.sukoharjo/" target="_blank">Instagram</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UChgodAUFt7N3Hfcs6RPlOTQ/" target="_blank">Youtube</a>
                    </li>
                    <li>
                        <a href="https://www.pkusukoharjo.com" target="_blank">Website</a>
                    </li>
                </p>
            </div>
            <div class="col-md-4">
                <div>
                    <h4>Kontak Kami</h4>
                    <p>
                        <i class="fa fa-phone"></i>&nbsp; : (0271) 593979 <br>
                        <i class="fa fa-envelope"></i> : pku.sukoharjo@gmail.com <br>
                        <i class="fa fa-map"></i> : Jl.Mayor Sunaryo No.37 Sukoharjo (57512) <br>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p>Copyright © 2021. <a target="_blank"><b>{{ getCompanyName() }}</b></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->
<!-- script for custom mobile navigation -->
<script>
    let barIcon = document.getElementById('barIcon')
    let headerCollapsible = document.getElementById('collapsedNav');

    barIcon.onclick = function () {
        if (headerCollapsible.classList.contains('open')) {
            headerCollapsible.classList.remove('open')
        } else {
            headerCollapsible.className += ' open'
        }
    }
</script>
</body>
</html>
