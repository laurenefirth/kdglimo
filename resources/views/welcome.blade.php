<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lauren's Limos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .linkDiv > a {
                color: #636b6f;
                padding: 5px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
				border: 1px solid black;
            }

            .m-b-md {
                margin-bottom: 30px;
				margin-top: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
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
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Lauren's Limos
                </div>
				
				<div class="container">
					<div class="row">
						<div class="linkDiv">
							<p>Please login to continue to bookings and reports</p>
							@auth
								<a href="{{ url('/home') }}" class="btn">{{ __('Continue') }}</a> 
							@else
								<a href="{{ route('login') }}" class="btn">{{ __('Login') }}</a>
							@endauth
						</div>
					</div>
				</div>

            </div>
        </div>
    </body>
</html>
