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
</head>
<body class="antialiased">
<div>
    <div>
        <img class="h-32 w-full object-cover lg:h-48"
             src="https://images.unsplash.com/photo-1627410566847-738061cb6995?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
             alt="">
    </div>
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
            <div class="flex">
                <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32"
                     src="{{ asset('images/ed.jpeg') }}" alt="">
            </div>
        </div>

        <div class="text-right contents-right -my-10">
            <div class="inline-flex space-x-2"><x-header-buttons/></div>
        </div>
    </div>
</div>



<div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 mt-12">
    <h1 class="truncate text-lg font-bold text-gray-900">
        🇺🇸 Ed Grosvenor 🇨🇭
    </h1>
    <div class="space-y-2">
        <p class="text-sm text-gray-600">@edgrosvenor <span class="inline-flex items-center rounded-full bg-gray-100
        px-2.5 py-0.5 text-xs font-medium text-gray-800">Follows you</span></p>
        <p class="text-xs text-gray-800">American PHP developer living in Basel, Switzerland. I run a global team of
            developers
            building the technology that powers <a href="https://exactsports.com">EXACT Sports</a> in Chicago.</p>
    </div>
</div>

<div class="mx-auto max-w-4xl">
    <div class="block">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8 mx-4" aria-label="Tabs">
                <a href="#" class="flex-1 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300
                whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-center font-bold text-black border-b
                border-blue-600">Screeds</a>

                <a href="#" class="flex-1 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300
                whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-center">Replies</a>

                <a href="#" class="flex-1 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300
                whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-center">Media</a>

                <a href="#" class="flex-1 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300
                whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-center">Likes</a>
            </nav>
        </div>
    </div>
</div>


<div class="min-h-screen bg-white
pt-0 max-w-5xl mx-auto">


    {{ $slot }}
</div>
</body>
</html>
