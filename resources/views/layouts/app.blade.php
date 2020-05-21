<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/4.0.0/github-markdown.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
    <link rel="stylesheet"
          href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.0.0/build/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.0.0/build/highlight.min.js"></script>
    <!-- and it's easy to individually load additional languages -->
    <script charset="UTF-8"
            src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.0/languages/go.min.js"></script>
    @livewireStyles
    <script src="https://kit.fontawesome.com/10061d64d6.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="alternate" href="{{ route('rss') }}" title="Ed Grosvenor's Blog" type="application/rss+xml" />
    @yield('head')
</head>
<body class="bg-{{ config('theme.color', 'gray') }}-100 h-screen antialiased leading-none">



@include('layouts.' . config('theme.app_layout', 'droopy'));



<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
@livewireScripts
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
