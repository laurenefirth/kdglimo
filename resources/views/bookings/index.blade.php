<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lauren's Limos - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
		html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

		.linkDiv > a, .linkDiv > button  {
            color: #636b6f;
            padding: 5px 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
			border: 1px solid black;
			cursor: pointer;
        }
		
		.top-right {
            position: absolute;
			right: 10px;
            top: 18px;
        }
		
		.top-left {
            position: absolute;
			left: 10px;
            top: 18px;
        }
		
		.top-bar {
			margin-bottom: 60px;
			width: 100%;
		}
		
		.nav {
			float:left;
			width:25%;
		}
		.main {
			float:left;
			width:75%;
		}
		
		.label {
			font-size: 20px;
			font-weight: bold;
			margin-left: 15px;
		}
		
		.form-body{
			margin-left: 15px;
			margin-top: 15px;
		}
		
		.row.form-group{
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
 
	<h1>All Information About Bookings</h1>
	 
	@foreach ($bookings as $booking)
	<li> {{ $booking}}  </li>
	@endforeach
	 
	<h1>Only First Names Of Devices</h1>
	 
	@foreach ($bookings as $booking)
	 
	<li> {{ $booking->firstName}}  </li>
	 
	@endforeach
	 
	</body>
</html>