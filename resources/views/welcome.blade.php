<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
          
        @endif

        <style>
            /* .form-signin {
            max-width: auto; 
            padding: 130px;
            display:block;
            background-color: #f7f7f7;
            -moz-box-shadow: 0 0 3px 3px #888;
            -webkit-box-shadow: 0 0 3px 3px #888;
            box-shadow: 0 0 3px 3px #888;
            border-radius:2px;
            } */
            .main{
                padding: 38px;
                border-radius: 15px;
            }
            .social-box{
            margin: 0 auto;
            padding: 38px;
            /* border-bottom:1px #ccc solid; */
            }
            .social-box a{
            font-weight:bold;
            font-size:18px;
            padding:8px;
            border-radius: 12px;   
            }
            .social-box a i{
            font-weight:bold;
            font-size:20px;
            }
            .heading-desc{
                font-size:20px;
                font-weight:bold;
                padding:38px 38px 0px 38px;
                
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
            margin-bottom: 10px;
            }
            .form-signin .checkbox {
            font-weight: normal;
            }
            .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: 20px;
            padding: 20px;
            -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                    box-sizing: border-box;
            }
            .form-signin .form-control:focus {
            z-index: 2;
            }
            .form-signin input[type="text"] {
            margin-bottom: 10px;
            border-radius: 5px;
            
            }
            .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-radius: 5px;
            }
            .login-footer{
                background:#f0f0f0;
                margin: 0 auto;
                border-top: 1px solid #dadada;
                padding:20px;
            }
            .login-footer .left-section a{
                font-weight:bold;
                color:#8a8a8a;
                line-height:19px;
            }
            .mg-btm{
                margin-bottom:20px;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <img src="/poster.jpg" alt="Food Item" class="w-full h-auto object-cover rounded-md landscape" style="height: 50vh; width: 100vw;">
        <div class="container">
            <div class="row justify-content-center">
                <form class="form-signin mg-btm">
                    <div class="social-box text-center">
                        <div class="row mg-btm">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                                <a href="#" class="btn btn-danger btn-block" style="white-space: normal;">
                                <i class="icon-facebook"></i>    Order as Guest
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                                <a href="{{ url('/foods/create') }}" class="btn btn-danger btn-block" style="white-space: normal;">
                                <i class="icon-twitter"></i>    Member Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="social-box text-center">	
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <p class="btn btn-block" style="white-space: normal;">
                                <i class="icon-twitter"></i> Not yet a member? Sign up with us today!
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                                <a href="#" class="btn btn-danger btn-block" style="white-space: normal;">
                                <i class="icon-twitter"></i>    Sign up Now
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
