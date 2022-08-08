@extends('layouts.css')

@section('reg-user')


            <div class="page-ath-header">
                <a href="/" class="page-ath-logo">
                    <img src="{{asset('custom-css/images/logo.png')}}"
                        srcset="{{asset('custom-css/images/logo2x.png 2x')}}" alt="logo"></a>
                    </div>
            <div class="page-ath-form">


                <h2 class="page-ath-heading">Sign up <small>Create New TokenCoin Account</small></h2>
                <form method="POST" action="{{route('register')}}">
                    @include('toastr')
                    @csrf

                    <div class="input-item">
                        <span class="text-danger"> @error('name') {{$message}} @enderror </span>

                        <input id="name" placeholder="Your Name" class="input-bordered" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
                    </div>
                    <div class="input-item">
                        <span class="text-danger"> @error('email') {{$message}} @enderror </span>

                        <input id="email" placeholder="Your Email"  class="input-bordered" type="email" name="email" :value="old('email')" />

                    </div>
                    <div class="input-item">
                        <span class="text-danger"> @error('password') {{$message}} @enderror </span>

                        <input id="password" placeholder="password" class="input-bordered" type="password" name="password" autocomplete="new-password" />

                    </div>
                    <div class="input-item">
                        <span class="text-danger"> @error('password_confirmation') {{$message}} @enderror </span>

                        <input id="password_confirmation" placeholder="Repeat Password" class="input-bordered" type="password" name="password_confirmation" autocomplete="new-password" />

                    </div>
                    <div class="input-item text-left">
                        <input class="input-checkbox input-checkbox-md"
                            id="term-condition" type="checkbox">
                            <label for="term-condition">I agree to TokenCoin
                                <a href="regular-page.html">Privacy Policy</a> &amp; <a href="regular-page.html">
                                Terms.</a></label>
                            </div>
                            <button class="btn btn-primary btn-block">Create Account</button>
                </form>
                <div class="sap-text"><span>Or Sign Up With</span></div>
                <ul class="row guttar-20px guttar-vr-20px">
                    <li class="col"><a href="#" class="btn btn-outline btn-dark btn-facebook btn-block"><em
                                class="fab fa-facebook-f"></em><span>Facebook</span></a></li>
                    <li class="col"><a href="#" class="btn btn-outline btn-dark btn-google btn-block"><em
                                class="fab fa-google"></em><span>Google</span></a></li>
                </ul>
                <div class="gaps-2x"></div>
                <div class="gaps-2x"></div>
                <div class="form-note">Already have an account ? <a href=""> <strong>Sign in
                            instead</strong></a></div>
            </div>
            <div class="page-ath-footer">
                <ul class="footer-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li>&copy; 2022 TokenCoin.</li>
                </ul>
            </div>

@endsection

