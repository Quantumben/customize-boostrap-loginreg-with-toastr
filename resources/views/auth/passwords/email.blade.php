@extends('layouts.css2')

@section('css2')

<div class="page-ath-content">
    <div class="page-ath-header"><a href="index.html" class="page-ath-logo"><img src="{{asset('custom-css/images/logo.png')}}"
                srcset="{{asset('custom-css/images/logo2x.png 2x')}}" alt="logo"></a></div>
    <div class="page-ath-form">
        <h2 class="page-ath-heading">Reset password <span>If you forgot your password, well, then we’ll email
                you instructions to reset your password.</span></h2>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="input-item">
                <input type="text" placeholder="Your Email" id="email" class="input-bordered" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <button type="submit" class="btn btn-primary btn-block">Send Reset Link</button>
                </div>
                <div><a href="{{route('login')}}">Return to login</a></div>
            </div>
            <div class="gaps-2x"></div>
        </form>

    </div>


    <div class="page-ath-footer">
        <ul class="footer-links">
            <li><a href="regular-page.html">Privacy Policy</a></li>
            <li><a href="regular-page.html">Terms</a></li>
            <li>&copy; 2022 TokenCoin</li>
        </ul>
    </div>
</div>

@endsection
