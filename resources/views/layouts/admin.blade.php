<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <style>

        </style>
    </head>
    <body>
        <header>
            <a href="{{ route('login') }}">login</a>
            <a href="{{ route('sign-up') }}">sign up</a>
            @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth
        </header>
        @yield('content')
    </body>
</html>
