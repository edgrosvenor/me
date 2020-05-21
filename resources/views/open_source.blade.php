@extends('layouts.app')
@section('content')
    <div class="relative bg-gray-50  pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">

        <div class="relative max-w-7xl mx-auto">
            @include('partials.header_menu')
            <div class="text-center">
                <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Open Source
                </h2>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    I maintain a small collection of PHP packages, mostly designed for Laravel.
                </p>
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul>
                    <li>
                        <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                        Laravel Passwordless Login
                                    </div>
                                    <div class="ml-2 flex-shrink-0 flex font-bold">
                                        <i class="mx-2 fab fa-php"></i>
                                        <i class="mx-2 fab fa-laravel"></i>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">

                                        <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mt-0">
                                            Use temporary signed routes to provide passwordless login without having to store tokens.
                                        </div>
                                    </div>
                                    <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mt-0">
                                        <div class="flex items-center text-sm leading-5 text-gray-500 mr-6">
                                            <a target="_blank" href="https://github.com/grosv/laravel-passwordless-login">
                                                <i class="fab fa-github mr-2"></i> On GitHub
                                            </a>
                                        </div>
                                        <div class="flex items-center text-sm leading-5 text-gray-500 mr-6">
                                            <i class="fa fa-book mr-2"></i>
                                            The Story
                                        </div>
                                        <div class="flex items-center text-sm leading-5 text-gray-500">
                                            <i class="fa fa-monkey mr-2"></i>
                                            Demo
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- r::open-source -->
@endsection
