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
                <h3 class="title">Register Your Club</h3>
                <p class="text-center">Clubs Registered: {{ $enrolled_clubs }}</p>
                <!-- Success Message -->
                @if (session('success'))
                    <div class="alert alert-success">
                        Club has been registered. All the best~!!
                    </div>
                @endif

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Display Condition -->
                @if (!session('success'))
                    <form class="account-form" method="post" action="{{ route('clubs.store') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Club Name" id="club_name" name="club_name"
                                value="{{ old('club_name') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Club Code" id="club_code" name="club_code"
                                value="{{ old('club_code') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Club Rank" id="club_rank" name="club_rank"
                                value="{{ old('club_rank') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="WhatsApp Number" id="whatsapp_number" name="whatsapp_number"
                                value="{{ old('whatsapp_number') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Owner Name" id="owner_name" name="owner_name"
                                value="{{ old('owner_name') }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="d-block default-button"><span>CONFIRM</span></button>
                        </div>
                    </form>
                    <div class="alert alert-warning mt-4">
                        <strong>Note:</strong> Total Registrations mai se sirf 64 clubs select kiye jaenge.
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Registration Section Ends Here -->

@endsection
