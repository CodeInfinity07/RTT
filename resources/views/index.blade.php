@extends('layouts.master')
@section('content')
    <!-- ===========Banner Section start Here========== -->
    <section class="banner-section" style="background-image: url(assets/images/banner/bg.jpeg);">
        <div class="container">
            <div class="">
                
            </div>
        </div>
    </section>
    <!-- ===========Banner Section Ends Here========== -->

    <!-- ===========match schedule Section start Here========== -->
    <section class="match-section padding-top padding-bottom" style="background-image:url(assets/images/match/bg.jpg)">
        <div class="container">
            <div class="section-header">
                <p>Anywhere, Anytime</p>
                <h2>All matches schedule</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="upcome-matches">
                            <h3 class="upcome-match-header">Today's Matches</h3>
                            <div class="row g-3">
                                @foreach ($todayMatches as $match)
                                    <div class="col-12">
                                        <div class="match-item-2 item-layer">
                                            <div class="match-inner">
                                                <div
                                                    class="match-header d-flex flex-wrap justify-content-between align-items-center">
                                                    <p class="match-team-info">
                                                        ROUND 1 <span class="fw-bold">64 Teams</span>
                                                    </p>
                                                    <p class="match-prize">LAST <span class="fw-bold">MAN</span> STANDING
                                                    </p>
                                                </div>
                                                <div class="match-content gradient-bg-orange">
                                                    <div class="row align-items-center justify-content-center">
                                                        <div class="col-md-2 col-5 p-0">
                                                            <div class="match-team-thumb text-center">
                                                                <a href="team-single" class="text-center"><img
                                                                        src="assets/images/banner/{{ $match->team1_id }}.png"
                                                                        alt="team-img"></a>
                                                            </div>

                                                        </div>
                                                        <div class="col-2 d-md-none">
                                                            <img src="assets/images/match/vs.png" alt="vs">
                                                        </div>
                                                        <div class="col-md-2 col-5 order-md-3 p-0">
                                                            <div class="match-team-thumb text-center">
                                                                <a href="team-single"><img
                                                                        src="assets/images/banner/{{ $match->team2_id }}.png"
                                                                        alt="team-img"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 order-md-2 mt-4 mt-md-0">
                                                            <div class="match-game-info text-center">
                                                                <h4 style="font-size: 13px;"><a style="color: #fff !important" href="team-single">{{ $match->team1_name }} VS
                                                                        {{ $match->team2_name }}</a>
                                                                </h4>
                                                                <p class="d-flex flex-wrap justify-content-center">
                                                                    <span
                                                                        class="match-date">{{ \Carbon\Carbon::parse($match->match_date)->format('d F Y') }}</span><span
                                                                        class="match-time">Time:
                                                                        {{ \Carbon\Carbon::parse($match->match_time)->format('g:i A') }}</span>
                                                                </p>
                                                                <ul
                                                                    class="match-social-list d-flex flex-wrap align-items-center justify-content-center">
                                                                    <li><a href="#"><img
                                                                                src="assets/images/match/social-1.png"
                                                                                alt="vimeo"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/match/social-2.png"
                                                                                alt="youtube"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/match/social-3.png"
                                                                                alt="twitch"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="upcome-matches">
                            <h3 class="upcome-match-header">Tomorrow's Matches</h3>
                            <div class="row g-3">
                                 @foreach ($tomorrowMatches as $match)
                                    <div class="col-12">
                                        <div class="match-item-2 item-layer">
                                            <div class="match-inner">
                                                <div
                                                    class="match-header d-flex flex-wrap justify-content-between align-items-center">
                                                    <p class="match-team-info">
                                                        ROUND 1 <span class="fw-bold">64 Teams</span>
                                                    </p>
                                                    <p class="match-prize">LAST <span class="fw-bold">MAN</span> STANDING
                                                    </p>
                                                </div>
                                                <div class="match-content gradient-bg-orange">
                                                    <div class="row align-items-center justify-content-center">
                                                        <div class="col-md-2 col-5 p-0">
                                                            <div class="match-team-thumb text-center">
                                                                <a href="team-single" class="text-center"><img
                                                                        src="assets/images/banner/{{ $match->team1_id }}.png"
                                                                        alt="team-img"></a>
                                                            </div>

                                                        </div>
                                                        <div class="col-2 d-md-none">
                                                            <img src="assets/images/match/vs.png" alt="vs">
                                                        </div>
                                                        <div class="col-md-2 col-5 order-md-3 p-0">
                                                            <div class="match-team-thumb text-center">
                                                                <a href="team-single"><img
                                                                        src="assets/images/banner/{{ $match->team2_id }}.png"
                                                                        alt="team-img"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 order-md-2 mt-4 mt-md-0">
                                                            <div class="match-game-info text-center">
                                                                <h4 style="font-size: 13px;"><a style="color: #fff" href="team-single">{{ $match->team1_name }} VS
                                                                        {{ $match->team2_name }}</a>
                                                                </h4>
                                                                <p class="d-flex flex-wrap justify-content-center">
                                                                    <span
                                                                        class="match-date">{{ \Carbon\Carbon::parse($match->match_date)->format('d F Y') }}</span><span
                                                                        class="match-time">Time:
                                                                        {{ \Carbon\Carbon::parse($match->match_time)->format('g:i A') }}</span>
                                                                </p>
                                                                <ul
                                                                    class="match-social-list d-flex flex-wrap align-items-center justify-content-center">
                                                                    <li><a href="#"><img
                                                                                src="assets/images/match/social-1.png"
                                                                                alt="vimeo"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/match/social-2.png"
                                                                                alt="youtube"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/match/social-3.png"
                                                                                alt="twitch"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-wrapper text-center mt-5">
                    <a href="schedule" class="default-button"><span>Browse All Matches <i
                                class="icofont-circled-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ===========match schedule Section Ends Here========== -->

    <div class="container">
        <hr class="m-0">
    </div>

    <!-- ===========CTA Section start Here========== -->
    <section class="cta-section padding-top padding-bottom">
        <div class="container">
            <div class="cta-wrapper item-layer">
                <div class="cta-item px-4 px-sm-5 pt-4 pt-sm-5 pt-lg-0"
                    style="background-image: url(assets/images/cta/bg.jpg);">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="cta-content">
                                <p class="theme-color text-uppercase ls-2">Let's Play together</p>
                                <h2 class="mb-3">Participate in <span class="theme-color text-uppercase">REX
                                        TOURNAMENT</span> </h2>
                                <p class="mb-4">Guess what? The REX Tournament is coming up, and we want YOU to be part
                                    of the action! 🚀 This is your chance to bring your A-game, have some fun, and maybe
                                    even take home the reward. Whether you're in it for the competition or just the good
                                    vibes, we know your team’s got what it takes.</p>
                                <a href="signup" class="default-button"><span>Register team <i
                                            class="icofont-circled-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cta-thumb text-end">
                                <img src="assets/images/cta/01.png" alt="gamer-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===========CTA Section Ends Here========== -->

    <div class="container">
        <hr class="m-0">
    </div>

    <!-- ===========Testimonial Section Start Here========== -->
    <div class="testimonial-section padding-top padding-bottom"
        style="background-image:url(assets/images/testimonial/bg.png)">
        <div class="container">
            <div class="section-header">
                <p>reactions</p>
                <h2>Our Reviews</h2>
            </div>
            <div class="section-wrapper">
                <div class="testimonial-slider overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="testimonial-inner">
                                    <div class="testimonial-head">
                                        <div class="testi-top">
                                            <div class="testimonial-thumb">
                                                <img src="assets/images/testimonial/01.jpg" alt="testimonial">
                                            </div>
                                            <div class="name-des">
                                                <h5>Scouse</h5>
                                                <p>Rex Squad</p>
                                            </div>
                                        </div>
                                        <a href="team-single"><img src="assets/images/testimonial/logo/01.png"
                                                alt="testimonial"></a>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>Edgeing nterfaces fnergstca plagiarize teams anbudng paradgms rapidiousl
                                            buildcaboration anden deassharing viaing and bleeding whereas goingi forward
                                            process and monetze</p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <ul>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                        </ul>
                                        <h5>5</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="testimonial-inner">
                                    <div class="testimonial-head">
                                        <div class="testi-top">
                                            <div class="testimonial-thumb">
                                                <img src="assets/images/testimonial/02.jpg" alt="testimonial">
                                            </div>
                                            <div class="name-des">
                                                <h5>Ace</h5>
                                                <p>Rex Squad</p>
                                            </div>
                                        </div>
                                        <a href="team-single"><img src="assets/images/testimonial/logo/02.png"
                                                alt="testimonial"></a>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>Rapidious buildcaboration anden deas sharing viaing and beedng edgeing nterfaces
                                            fnergstcia plagiarize teams anbuding paradgm whereas goingi forward process and
                                            monetze</p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <ul>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                            <li><i class="icofont-ui-rate-blank"></i></li>
                                        </ul>
                                        <h5>5</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========Testimonial Section Ends Here========== -->
@endsection