@extends('layouts.css')

@section('reg-user')

            <div class="page-ath-header">
                <a href="/" class="page-ath-logo">

                    <img src="{{asset('custom-css/images/logo.png')}}"
                        srcset="{{asset('custom-css/images/logo2x.png 2x')}}" alt="logo"></a>
                    </div>
            <div class="page-ath-form">
                <h2 class="page-ath-heading">Sign in <small>with your TokenCoin Account</small></h2>

                <form method="POST" action="{{route('login')}}">
                    @include('toastr')
                    @csrf

                    <div class="input-item">
                        <span class="text-danger"> @error('email') {{$message}} @enderror </span>

                        <input type="email" placeholder="Your Email" class="input-bordered" id="email" name="email" :value="old('email')" autofocus />
                    </div>
                    <div class="input-item">
                        <span class="text-danger"> @error('password') {{$message}} @enderror </span>

                        <input type="password" placeholder="Password" class="input-bordered" id="password" name="password" autocomplete="current-password" />
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="input-item text-left">
                            <input class="input-checkbox input-checkbox-md"
                                id="remember-me" type="checkbox">
                                <label for="remember-me">Remember Me</label>
                            </div>
                        <div>
                            <a href="forgot.html">Forgot password?</a>
                            <div class="gaps-2x"></div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block">Sign In</button>
                </form>

                <div class="sap-text"><span>Or Sign In With</span></div>
                <ul class="row guttar-20px guttar-vr-20px">
                    <li class="col"><a href="#" class="btn btn-outline btn-dark btn-facebook btn-block"><em
                                class="fab fa-facebook-f"></em><span>Facebook</span></a></li>
                    <li class="col"><a href="#" class="btn btn-outline btn-dark btn-google btn-block"><em
                                class="fab fa-google"></em><span>Google</span></a></li>
                </ul>
                <div class="gaps-2x"></div>
                <div class="gaps-2x"></div>
                <div class="form-note">Don’t have an account? <a href=""> <strong>Sign up here</strong></a>
                </div>
            </div>
            <div class="page-ath-footer">
                <ul class="footer-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li>&copy; 2022 TokenCoin.</li>
                </ul>
            </div>

@endsection
