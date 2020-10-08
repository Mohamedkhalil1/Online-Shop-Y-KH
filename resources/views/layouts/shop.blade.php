<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>@yield('title')</title>
    
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/img/core-img/logo2.ico')}}">
    
   
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/core-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/nouislider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
   
  
    @yield('style')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->

@include('includes.sidebar')
<div id="wrapper">
    @include('includes.header')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @yield('content')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('includes.footer')
</div>

<script src="{{asset('assets/js/jquery/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/plugins.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/active.js')}}" type="text/javascript"></script>
@yield('script')
</body>
</html>
