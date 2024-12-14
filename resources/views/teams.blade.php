@extends('layouts.master')
@section('content')
    <!-- ===========Banner Section start Here========== -->
    <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
        <div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">participating teams</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Team</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ===========Banner Section Ends Here========== -->


    <!-- ===========Collection Section Start Here========== -->
    <section class="collection-section padding-top padding-bottom">
        <div class="container">
            <div class="section-wrapper">
                <ul
                    class="collection-filter-button-group common-filter-button-group d-flex flex-wrap justify-content-center mb-5 text-uppercase">
                    <li class="is-checked" data-filter="*">Round 1</li>
                    <li data-filter=".collection-0">Round 2</li>
                    <li data-filter=".collection-0">Round 3</li>
                    <li data-filter=".collection-0">Round 4</li>
                </ul>
                <div class="row g-4 justify-content-center collection-grid">
                    @for ($i = 1; $i <= 66; $i++)
                        @php
                            $bgNumber = ((($i - 1) % 8) % 3) + 1;
                        @endphp
                        <div class="col-lg-4 col-md-4 col-sm-6 gameListItem collection-one">
                            <div class="game-item item-layer">
                                <div class="game-item-inner bg-{{ $bgNumber }}">
                                    <div class="game-thumb">
                                        <img src="assets/images/banner/{{ $i }}.png" alt="game-img">
                                    </div>
                                    <div class="game-overlay">
                                        <ul class="rating-star d-flex flex-wrap justify-content-center align-items-center">
                                            <li class="li"><i class="icofont-star"></i></li>
                                            <li class="li"><i class="icofont-star"></i></li>
                                            <li class="li"><i class="icofont-star"></i></li>
                                            <li class="li"><i class="icofont-star"></i></li>
                                            <li class="li"><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </section>
    <!-- ===========Collection Section Ends Here========== -->
@endsection
