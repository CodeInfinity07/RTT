@extends('layouts.master')
@section('content')
    <!-- ===========Banner Section start Here========== -->
    <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
        <div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">Registration Page</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ===========Banner Section Ends Here========== -->

    <!-- Registration Section Starts Here -->
    <div class="login-section padding-top padding-bottom">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">ID Tool</h3>
                <!-- Success Message -->
                @if (session('success'))
                    <div class="alert alert-success">
                        Club has been registered. All the best~!!
                    </div>
                @endif

                @error('whatsapp_number')
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $message }}</li>
                        </ul>
                    </div>
                @enderror

                @error('club_code')
                    <div class="alert alert-danger">
                        <ul>
                            <li>Yeh Club pehle se registered hai.</li>
                        </ul>
                    </div>
                @enderror

                @if (!session('success'))
                    <form class="account-form" method="post" action="{{ route('ids.store') }}">
                        @csrf
                        <div class="form-group">
                            <select aria-label="SELECT CLUB">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter ID" id="player_id" name="player_id">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="d-block default-button"><span>CONFIRM</span></button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <!-- Registration Section Ends Here -->
@endsection
