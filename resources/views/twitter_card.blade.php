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
</head>
<body class="bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-100 antialiased leading-none m-0" style="width: 1024px; height: 512px;">
    <div id="card" class="bg-white overflow-hidden" style="width: 1024px; height: 512px;">
        <div class="relative py-12 px-8 sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="/">
                            <img class="h-12 w-auto rounded-full"
                                 src="https://pbs.twimg.com/profile_images/1222189979151093760/YuJd1bK1_400x400.jpg"
                                 alt=""/>
                        </a>

                    </div>
                </div>
                <div class="md:ml-10 md:pr-4">
                    <h2 class="font-bold text-2xl">{{ $fm['title'] }}</h2>
                    <div class="text-gray-500 pt-2">{{ \Carbon\Carbon::parse($fm['published_at'])->format('F j, Y') }}</div>
                </div>
            </nav>
        </div>
        <div class="text-center">
            <img src="{{ cloudinary($fm['cloudinary'], 'hero') }}" alt="" class="w-full rounded-sm">
        </div>

    </div>
</body>
</html>
