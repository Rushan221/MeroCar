<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
</head>
<body>
    <header>Header</header>
        @yield('content')
    <footer>Footer</footer>
</body>
</html>
