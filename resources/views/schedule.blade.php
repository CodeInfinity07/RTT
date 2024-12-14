@extends('layouts.master')
@section('content')
    <!-- ===========PageHeader Section Start Here========== -->
    <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
        <div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">schedule</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">matches</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ===========PageHeader Section Ends Here========== -->


    <!-- ===========match schedule Section start Here========== -->
    <section class="match-section padding-top padding-bottom">
        <div class="container">
            <div class="section-wrapper">
                <ul
                    class="match-filter-button-group common-filter-button-group d-flex flex-wrap justify-content-center mb-5 text-uppercase">
                    <li class="is-checked" data-filter="*">ROUND 1</li>
                </ul>
                <div class="row g-4 match-grid">
                    @foreach ($matches as $match)
                        <div class="col-lg-6 col-12 matchlistitem match-1">
                            <div class="match-item-2 item-layer">
                                <div class="match-inner">
                                    <div class="match-header d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="match-team-info">
                                            ROUND 1 <span class="fw-bold">64 Teams</span>
                                        </p>
                                        <p class="match-prize">LAST <span class="fw-bold">MAN</span> STANDING</p>
                                    </div>
                                    <div class="match-content gradient-bg-pink">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-md-2 col-5 p-0">
                                                <div class="match-team-thumb text-center">
                                                    <a href="team-single.html" class="text-center"><img
                                                            src="assets/images/banner/{{ $match->team1_id }}.png"
                                                            alt="team-img"></a>
                                                </div>

                                            </div>
                                            <div class="col-2 d-md-none">
                                                <img src="assets/images/match/vs.png" alt="vs">
                                            </div>
                                            <div class="col-md-2 col-5 order-md-3 p-0">
                                                <div class="match-team-thumb text-center">
                                                    <a href="team-single.html"><img
                                                            src="assets/images/banner/{{ $match->team2_id }}.png"
                                                            alt="team-img"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 order-md-2 mt-4 mt-md-0">
                                                <div class="match-game-info text-center">
                                                    <h4 style="font-size: 15px;"><a
                                                            href="#" style="color: #fff !important">{{ $match->team1_name }} VS
                                                            {{ $match->team2_name }}</a>
                                                    </h4>
                                                    <p class="d-flex flex-wrap justify-content-center">
                                                        <span
                                                            class="match-date">{{ \Carbon\Carbon::parse($match->match_date)->format('d F Y') }}
                                                        </span><span class="match-time">Time:
                                                            {{ \Carbon\Carbon::parse($match->match_time)->format('g:i A') }}
                                                        </span>
                                                    </p>
                                                    <ul
                                                        class="match-social-list d-flex flex-wrap align-items-center justify-content-center">
                                                        <li><a href="#"><img src="assets/images/match/social-1.png"
                                                                    alt="vimeo"></a></li>
                                                        <li><a href="#"><img src="assets/images/match/social-2.png"
                                                                    alt="youtube"></a></li>
                                                        <li><a href="#"><img src="assets/images/match/social-3.png"
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
    </section>
    <!-- ===========match schedule Section Ends Here========== -->
@endsection
