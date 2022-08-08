<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Buy and Sell Your Cryptocurrency.">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{asset('custom-css/images/favicon.png')}}">
    <!-- Site Title  -->
    <title>Signin-Signup</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{asset('custom-css/assets/css/vendor.bundle49f7.css')}}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('custom-css/assets/css/style49f7.css')}}" id="layoutstyle">
    <!-- Toastr styles for this template -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body class="page-ath">
    <div class="page-ath-wrap">
        <div class="page-ath-content">

         @yield('reg-user')

        </div>
        <div class="page-ath-gfx">
            <div class="w-100 d-flex justify-content-center">
                <div class="col-md-8 col-xl-5">
                    <img src="{{asset('custom-css/images/ath-gfx.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript (include all script here) -->
    {{-- <script src="{{asset('custom-login/assets/js/jquery.bundle49f7.js?ver=104')}}"></script> --}}
    <script src="{{asset('custom-css/assets/js/script49f7.js')}}"></script>
</body>
</html>
