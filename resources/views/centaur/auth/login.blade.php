<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login to Ng3thanh</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/fonts/linearicons/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/util-login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/main-login.css') }}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ URL::route('auth.login.attempt') }}">
                {{ csrf_field() }}
                <span class="login100-form-title p-b-34">
                    Account Login
                </span>

                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
                    <input id="email" class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>

                <div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

                    <a href="#" class="txt2">
                        User name / password?
                    </a>
                </div>

                <div class="w-full text-center">
                    <a href="#" class="txt3">
                        Sign Up
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('auth/images/bg-01.jpg');"></div>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<script src="{{ asset('auth/js/jquery.min.js') }}"></script>
<script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('auth/js/main-login.js') }}"></script>

</body>
</html>