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

		.linkDiv > a, .linkDiv > button, .submitBtn {
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
			margin-top: 15px;
		}
		
		.row.form-group{
			margin-bottom: 10px;
		}
		
		.maincontent {
			margin-left:15px;
		}
		
		.text-danger {
			color: red;
		}
		.hasError {
			border: 1px solid red;
		}
		.hasSuccess {
			color: green;
		}
	</style>
</head>
<body>
    <div id="app">
		<div class="container top-bar">
			<div class="top-left links linkDiv">
				<a class="homeLink" href="{{ url('/') }}">{{ __('Home') }}</a>
			</div>
			<div class="top-right links">
                   @auth
                    <a href="{{ url('/home') }}">{{ __('My Account') }}</a> | 
					<a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
                    </form>
                @else
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                @endauth
            </div>
		</div>
		<hr>
        <div class="container">
            <div class="nav">
				<nav>
					@auth
					<p class="label">Menu</p>
					<ul>
						@if(Auth::user()->roles == 'Admin')
							<li><a href="{{ url('/usermanagement') }}">{{ __('User Management') }}</a></li>
						@endif
						<li><a href="{{ url('/createbooking') }}">{{ __('Submit Bookings') }}</a></li>
						<li><a href="{{ url('/calendarreport') }}">{{ __('Calendar Report') }}</a></li>
						<li><a href="{{ url('/listreport') }}">{{ __('List Report') }}</a></li>
					</ul>
					@endauth
				</nav>
			</div>
			
			<div class="main">
				<main>
					@yield('content')
				</main>
			</div>
                
        </div>

    </div>
</body>
</html>
