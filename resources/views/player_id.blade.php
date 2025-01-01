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
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Error Message -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form class="account-form" method="post" action="{{ route('ids.store') }}">
                        @csrf
                        <div class="form-group">
                            <select required name="club_code" aria-label="SELECT CLUB">
                                <option selected disabled>SELECT CLUB</option>
                                @foreach($clubs as $club)
                                    <option value="{{ $club->club_code }}">{{ $club->club_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input required type="text" placeholder="Enter ID" id="player_id" name="player_id">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="d-block default-button"><span>CONFIRM</span></button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- Registration Section Ends Here -->
@endsection
