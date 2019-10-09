<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
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
            @endif

            <div class="content container pt-3">
            <div class="jumbotron">
                <h1 class="display-4">Hello, appslanka!</h1>
                <p class="lead">we are developing apps.</p>
                <hr class="my-4">
                <p>we develop android apps also.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            </div>

                <div class="links container">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    <a href="/home">Home</a>
                    <a href="/contact">contact page</a>
                </div>
            </div>
        </div>
    </body>
</html>
