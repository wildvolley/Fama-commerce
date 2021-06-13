@extends('layouts.app1')

@section('title')
    Inscription
@endsection

@section('contenu')

@section('link')
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="frontend/formlogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/formlogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/formlogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="frontend/formlogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/formlogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/formlogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="frontend/formlogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontend/formlogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="frontend/formlogin/css/main.css">
<!--===============================================================================================-->

@endsection

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                <span class="login100-form-title">
                    Inscription
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" name="username" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="password" name="pass" placeholder="Mot de passe">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100" type="password" name="pass" placeholder="Confirmation mot de passe">
                    <span class="focus-input100"></span>
                </div>


                <div class="text-right p-t-13 p-b-23">
                    <span class="txt1">
                        Oublié
                    </span>

                    <a href="#" class="txt2">
                        Nom d'utilisateur / Mot de passe?
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        S'inscrire
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40">
                    <span class="txt1 p-b-9">
                        Déjà inscrit?
                    </span>

                    <a href={{URL('/login')}} class="txt3">
                        Se connecter
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


   
    <!-- Breadcrumb Form Section Begin -->

    
    <!-- Register Form Section End -->
@endsection

@section('script')
<!--===============================================================================================-->
<script src="frontend/formlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/formlogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/formlogin/vendor/bootstrap/js/popper.js"></script>
	<script src="frontend/formlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/formlogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/formlogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="frontend/formlogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="frontend/formlogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="frontend/formlogin/js/main.js"></script>
    
@endsection
