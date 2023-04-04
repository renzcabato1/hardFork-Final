<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8">
	<meta name="description" content="Swap, earn, and build on the leading decentralized crypto trading protocol">
	<meta name="keywords" content="cryptocurrency, hardfork, Collect Whiskey, Live Auctions">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/icon.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/themify-icons.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/style.css')}}"/>

</head>
<body >
        <div id="preloder">
            <div class="loader"></div>
        </div>
        @yield('header')
        @yield('content')

        <script src="{{asset('home/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('home/js/main.js')}}"></script>
</body>
</html>
