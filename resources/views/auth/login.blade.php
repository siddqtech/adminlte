<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page | Materialize - Material Design Admin Template</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="{{ asset('assets/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('assets/css/style.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="{{ asset('assets/css/custom/custom.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('assets/css/layouts/page-center.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{asset('assets/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ asset('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
         @include('include.errors')
          @include('include.notification')
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" method="post" action="{{route('auth')}}">
        {{csrf_field()}}
        <div class="row">
          <div class="input-field col s12 center">
            <img src="{{asset('assets/images/login-logo.png')}}" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Material Design Admin Template</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="email">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" name="Login" value="Login"  class="btn waves-effect waves-light col s12">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="{{ asset('assets/js/plugins/jquery-1.11.2.min.js')}}"></script>
  <!--materialize js-->
  <script type="text/javascript" src="{{ asset('assets/js/materialize.min.js')}}"></script>
  <!--prism-->
  <script type="text/javascript" src="{{ asset('assets/js/plugins/prism/prism.js')}}"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="{{ asset('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{asset('assets/js/plugins.min.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{ asset('assets/js/custom-script.js')}}"></script>

</body>

</html>