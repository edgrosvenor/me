@extends('layouts.app')
@section('content')
    @include('partials.header_menu')
    <div class="relative bg-gray-50  pb-20 px-4 sm:px-6 pt-12 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Hits From The Blog
                </h2>
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                <a href="/blog/05-2020-parsing-markdown-with-code-highlighting.md" class="block">
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{ cloudinary('oncql5uvq8jtw8sxzo1a.jpg', 'hero') }}" alt="" />
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm leading-5 font-medium text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600">

                                    Laravel

                            </p>

                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Code Highlighting in Your Blog
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    I set up my new markdown-powered Laravel blog and decided to add code highlighting. I was pleasantly surprised at how easy it was.
                                </p>
                        </div>
                    </div>
                </div>
                </a>
                <a href="blog/05-2020-multiple-databases-on-an-rds-instance-with-laravel-vapor.md" class="block">
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ cloudinary('w7t8bv2pwpar3tfj9ath.png', 'hero') }}" alt="" />
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600">

                                    Laravel

                                </p>

                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Databases on Vapor
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    You can share one RDS instance to run separate databases for all your Vapor sites. It's not in the docs but it works exactly the way you'd expect.
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/blog/07-2020-parsing-natural-language-date-strings-in-php.md" class="block">
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ cloudinary('boris-misevic-am7MoACtjt8-unsplash_vil0tv.jpg', 'hero') }}" alt="" />
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600">

                                    PHP

                                </p>

                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Introducing Sundial
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    <strong>Another Package in a Day Creation!</strong><br> Try Sundial, my new natural language date / time string parser for PHP 7.4 and up.
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Recent Posts
            </h3>
        </div>
        <ul>
            @foreach ($articles as $article)
            <li>
                <a href="/blog/{{$article['file']}}" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-medium text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600">
                                {{ $article['title'] }}
                            </div>
                            <div class="hidden md:block ml-2 flex-shrink-0 flex">
                                @foreach ($article['tags'] ?? [] as $tag)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-100 text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-800 mr-2 mt-2">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <div class="text-gray-500 text-sm mt-2">{{ \Carbon\Carbon::parse($article['published_at'])->format('l F j, Y') }}</div>
                        <div class="mt-2">{{ $article['description'] }}</div>

                    </div>
                </a>
            </li>
            @endforeach

        </ul>
    </div>
    <!-- r::blog -->
@endsection
