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
                    <li class="is-checked" data-filter="*">ROUND 2</li>
                </ul>
                <div class="row g-4 match-grid">
                    @foreach ($matches as $match)
                        <div class="col-lg-6 col-12 matchlistitem match-1">
                            <div class="match-item-2 item-layer">
                                <div class="match-inner">
                                    <div class="match-header d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="match-team-info">
                                            ROUND 2 <span class="fw-bold">32 Teams</span>
                                        </p>
                                        <p class="match-prize"><span class="fw-bold">4</span> Players ARROW</p>
                                    </div>
                                    <div class="match-content gradient-bg-pink">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-2 d-md-none">
                                                <img src="assets/images/match/vs.png" alt="vs">
                                            </div>
                                            <div class="col-md-8 order-md-2 mt-4 mt-md-0">
                                                <div class="match-game-info text-center">
                                                <h4 style="font-family: monospace;">
                                                    <span style="display: block; padding: 5px 10px; color: white; background-color:rgb(64, 12, 0);">{{ $match->team1 }}</span>
                                                    <span style="display: block; padding: 5px 10px; color: white; background-color:rgb(0, 53, 10);">{{ $match->team2 }}</span>
                                                    <span style="display: block; padding: 5px 10px; color: white; background-color:rgb(0, 9, 47);">{{ $match->team3 }}</span>
                                                    <span style="display: block; padding: 5px 10px; color: white; background-color:rgb(64, 0, 87);">{{ $match->team4 }}</span>
                                                </h4>

                                                <p class="d-flex flex-wrap justify-content-center">
                                                    <span
                                                        class="match-date">{{ \Carbon\Carbon::parse($match->match_date)->format('d F Y') }}
                                                    </span><span class="match-time">Time: 10:00 PM (PST)                                                    </span>
                                                </p>
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
