<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ITS Shortlink</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="https://www.its.ac.id/wp-content/uploads/2017/10/favicon-1.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{url('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('css/set1.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <style>
        .lds-facebook {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
        }
        .lds-facebook div {
        display: inline-block;
        position: absolute;
        left: 8px;
        width: 16px;
        background: #fff;
        animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
        }
        .lds-facebook div:nth-child(1) {
        left: 8px;
        animation-delay: -0.24s;
        }
        .lds-facebook div:nth-child(2) {
        left: 32px;
        animation-delay: -0.12s;
        }
        .lds-facebook div:nth-child(3) {
        left: 56px;
        animation-delay: 0;
        }
        @keyframes lds-facebook {
        0% {
            top: 8px;
            height: 64px;
        }
        50%, 100% {
            top: 24px;
            height: 32px;
        }
        }
    </style>
</head>

<body>
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12" style="background-color:#013881;">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="logo.png" style="width: 100px;">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li><a href="https://integra.its.ac.id/" class="btn btn-outline-light top-btn">myITS</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('body')
    @yield('modal')
    <script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() > 100) {
                $('.fixed').addClass('is-sticky');\
            }
            else {
                $('.fixed').removeClass('is-sticky');
            };
        });
    </script>
    @yield('js')
</body>

</html>
