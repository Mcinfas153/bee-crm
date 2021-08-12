<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 | Welcome</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <h1>Welcome Blade</h1>
    <ul>
        @auth
        <li><a href="{{ URL::to('dashboard') }}">Home</a></li>
        @else
        <li><a href="{{ URL::to('login') }}">Login</a></li>
        <li><a href="{{ URL::to('register') }}">Register</a></li>
        @endauth
    </ul>


</body>

</html>