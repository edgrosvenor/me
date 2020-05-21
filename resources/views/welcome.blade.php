@extends('layouts.app')
@section('content')

    <div class="relative bg-white overflow-hidden">
        <div class="max-w-screen-xl mx-auto ">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                     fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100"/>
                </svg>
                @include('partials.header_menu')


                <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                            Welcome To My
                            <br class="xl:hidden"/>
                            <span class="text-{{ config('theme.color', 'gray') }}-600">Playground</span>
                        </h2>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            This site is just a big collection of experiments and ideas. Some of them turn into
                            packages. Some turn into businesses. Most just sit here and wait their turn for greatness.
                            Maybe something here will inspire you. Hit me up on <a
                                href="https://twitter.com/MaybeEdward">Twitter</a> or <a
                                href="https://t.me/MaybeEdward">Telegram</a> if it does.
                        </p>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            My name is Ed Grosvenor. I'm a web developer with a couple decades of experience. I have a wife, two kids, and a day job that covid is requiring me to mostly do overnight.
                        </p>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            My specialty is workflow and developer experience. I'm always on the lookout for ways to save keystrokes and automate the things that I don't like to do.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                 src="https://source.unsplash.com/800x600?&ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                 alt=""/>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 flex-row text-center">

            @foreach ($colors as $color)
            <span class="flex-1 rounded-md shadow-sm">
                <a href="/?color={{ $color }}" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-{{ $color }}-600 hover:bg-{{ $color }}-500 focus:outline-none focus:border-{{ $color }}-700 focus:shadow-outline-{{ $color }} active:bg-{{ $color }}-700 transition ease-in-out duration-150">
                    {{ ucfirst($color) }} Mode
                </a>
            </span>
            @endforeach
            <span class="inline-flex rounded-md shadow-sm">
                <a href="/" type="button" class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                    Random Mode
                </a>
            </span>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-base leading-6 text-{{ config('theme.color', 'gray') }}-600 font-semibold tracking-wide uppercase">
                    Running On The Tall Stack</p>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Super Fast Development Gets to Failure Faster
                </h3>
                <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                    A wise man once said that every success is made of 10,000 failures. I think, anyway. I've never
                    bothered to look. I saw it on Facebook, though, so it's probably true. The TALL stack lets me fail
                    faster than ever before!
                </p>
            </div>

            <div class="mt-10">
                <ul class="md:grid md:grid-cols-2 md:col-gap-8 md:row-gap-10">
                    <li>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md border-2 border-{{ config('theme.color', 'gray') }}-500 text-white">
                                    <svg viewBox="0 0 256 154" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                        <defs>
                                            <linearGradient x1="-2.77777778%" y1="32%" x2="100%" y2="67.5555556%"
                                                            id="linearGradient-1">
                                                <stop stop-color="#4a5568" offset="0%"></stop>
                                                <stop stop-color="#4a5568" offset="100%"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g>
                                            <path
                                                d="M128,-1.0658141e-14 C93.8666667,-1.0658141e-14 72.5333333,17.0666667 64,51.2 C76.8,34.1333333 91.7333333,27.7333333 108.8,32 C118.537481,34.4343704 125.497363,41.4985481 133.201067,49.3184 C145.750756,62.0567704 160.275437,76.8 192,76.8 C226.133333,76.8 247.466667,59.7333333 256,25.6 C243.2,42.6666667 228.266667,49.0666667 211.2,44.8 C201.462519,42.3656296 194.502637,35.3014519 186.798933,27.4816 C174.249244,14.7432296 159.724563,-1.0658141e-14 128,-1.0658141e-14 Z M64,76.8 C29.8666667,76.8 8.53333333,93.8666667 0,128 C12.8,110.933333 27.7333333,104.533333 44.8,108.8 C54.5374815,111.23437 61.497363,118.298548 69.2010667,126.1184 C81.7507556,138.85677 96.275437,153.6 128,153.6 C162.133333,153.6 183.466667,136.533333 192,102.4 C179.2,119.466667 164.266667,125.866667 147.2,121.6 C137.462519,119.16563 130.502637,112.101452 122.798933,104.2816 C110.249244,91.5432296 95.724563,76.8 64,76.8 Z"
                                                fill="url(#linearGradient-1)"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Tailwind CSS + Tailwind UI</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Design and development are different skills. I'm not a designer. Tailwind UI and
                                    Tailwind CSS let me make stuff that looks good anyway.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md border-2 border-{{ config('theme.color', 'gray') }}-500 text-white">
                                    <i class="fa fa-wine-glass-alt fa-2x text-gray-700"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Alcohol</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Some people say the A in TALL is for <a href="https://github.com/alpinejs/alpine">Alpine.js</a>.
                                    Alpine's cool and all, but more beer than x-data goes into my work.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md border-2 border-{{ config('theme.color', 'gray') }}-500 text-gray-900">
                                    <i class="fab fa-2x fa-laravel"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Laravel (On Vapor)</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Laravel is perfect for rapid development. Throw out what sucks and deploy what
                                    works. If you do it the Laravel Way, it'll (mostly) scale.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md border-2 border-{{ config('theme.color', 'gray') }}-500 text-gray-800">
                                    <i class="fa fa-2x fa-spinner fa-spin"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Livewire</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    The only thing I know how to do in javascript is keep the ENTER button from
                                    submitting my form early. Livewire handles the rest.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <section class="bg-white overflow-hidden">
        <div class="relative max-w-screen-xl mx-auto pt-20 pb-12 px-4 sm:px-6 lg:px-8 lg:py-20">


            <div class="relative lg:flex lg:items-center">
                <div class="hidden lg:block lg:flex-shrink-0">
                    <img class="h-64 w-64 rounded-full xl:h-80 xl:w-80"
                         src="https://images.unsplash.com/photo-1548662954-1b1abc035c46?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt=""/>
                </div>

                <div class="relative lg:ml-10">

                    <blockquote>
                        <div class="text-4xl leading-9 font-medium text-gray-900">
                            <p>
                                "You be a dinosaur and I'll try to run you over with my monster truck."
                            </p>
                        </div>
                        <footer class="mt-8">
                            <div class="flex">
                                <div class="flex-shrink-0 lg:hidden">
                                    <img class="h-12 w-12 rounded-full"
                                         src="https://images.unsplash.com/photo-1548662954-1b1abc035c46?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt=""/>
                                </div>
                                <div class="ml-4 lg:ml-0">
                                    <div class="text-base leading-6 font-medium text-gray-900">Milo Grosvenor</div>
                                    <div
                                        class="text-base leading-6 font-medium text-{{ config('theme.color', 'gray') }}-600">
                                        My Kid
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

@endsection
