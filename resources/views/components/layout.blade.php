<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Ed Grosvenor' }}</title>

    <link rel="icon"
          href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🥶</text></svg>">

    <script src="https://kit.fontawesome.com/d13bc94d0a.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')

    @vite('resources/js/app.js')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/5.1.0/github-markdown.min.css">
</head>
<body class="antialiased">



<div class="min-h-screen bg-white
pt-0 max-w-4xl mx-auto">

    {{ $profile ?? '' }}
    {{ $slot }}
</div>
</body>
</html>
