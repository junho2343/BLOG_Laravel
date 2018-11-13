<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/css/app.css">

        <!-- Fonts -->
        

        <!-- Styles -->
    </head>
    <body>
    	<header>
    		<div class="container">
    			<a href="{{ url('/') }}"><h2>준호의 기술블로그</h2></a>
    			<a href="{{ url('/admin') }}" class="btn btn-light">관리자 모드</a>
    		</div>	
    	</header>
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
            {{ app\Lib\Lib::error() }}
        @yield('content')
    </body>
</html>
