<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Fryderyk Szafarczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('assets/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('assets/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('assets/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href=" {{ asset('assets/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href=" {{ asset('assets/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Fryderyk Szafarczyk: @yield('title')</title>
    <!-- Styles -->
    @vite(['resources/js/app.js'])
</head>
<body class="@yield('body-class')">
    @yield('body')
</body>
</html>
