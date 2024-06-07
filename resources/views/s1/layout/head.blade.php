<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Главная')</title>

    <meta name="description" content="@yield('meta_d')">
    <meta name="keywords" content="@yield('meta_k')">

    @include('s1.layout.styles')
    @stack('custom_styles')
</head>
