@extends('layouts.app')
@section('content')
    <div class="relative bg-white pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
        @include('partials.header_menu')
        <div class="relative max-w-7xl mx-auto my-12">

            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        My Open Source Offerings
                    </h3>
                </div>
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
                                            <a href="/demo/passwordless_login">
                                                <i class="fa fa-monkey mr-2"></i>
                                                Demo
                                            </a>
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
