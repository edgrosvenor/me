@extends('layouts.app')
@section('content')
    <div class="relative bg-white pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
        @include('partials.header_menu')

        <div class="bg-white py-5 border-b border-gray-200 mt-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                A Package In A Day
            </h3>
        </div>
        <p class="text-gray-700 font-lg my-4 leading-5">When I identify an opportunity to improve my life as a developer by creating something reusable like a package, I mull it over until I know how to get an MVP done and out the door in a day. I build it in a single day. I share it with the world the following day. If the community gets excited about it I keep investing my time. Or if I find myself pulling it into project after project, I keep investing my time. Otherwise, it just sits there. A day of learning from the distant past.</p>
        <p class="text-gray-700 font-lg my-4 leading-5">These are the packages that are either recent creations or have stood the test of time. Either because the community loves them or because I couldn't live without them. Enjoy!</p>
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <li class="col-span-1 bg-white rounded-lg shadow">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                    <div class="flex-1 truncate">
                        <a href="/blog/07-2020-parsing-natural-language-date-strings-in-php.md">
                        <div class="flex items-center space-x-3">

                                <h3 class="text-gray-900 text-sm leading-5 font-medium truncate">Sundial</h3>
                                <span class="flex-shrink-0 inline-block px-2 py-0.5 text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-800 text-xs leading-4 font-medium bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-100 rounded-full ml-12">PHP</span>

                        </div>
                        </a>
                        <p class="mt-1 text-gray-500 text-sm leading-5 truncate">Date Time String Parsing for PHP  7.4+</p>
                    </div>
                </div>
                <div class="border-t border-gray-200">
                    <div class="-mt-px flex">
                        <div class="w-0 flex-1 flex border-r border-gray-200">
                            <a href="https://github.com/grosv/sundial" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                <i class="fa fa-github"></i>
                                <span class="ml-3">On GitHub</span>
                            </a>
                        </div>
                        <div class="-ml-px w-0 flex-1 flex">
                            <a href="/demo/sundial" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                <i class="fa fa-eye"></i>
                                <span class="ml-3">Demo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-span-1 bg-white rounded-lg shadow">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                    <div class="flex-1 truncate">
                        <div class="flex items-center space-x-3">
                            <h3 class="text-gray-900 text-sm leading-5 font-medium truncate">Passwordless Login</h3>
                            <span class="flex-shrink-0 inline-block px-2 py-0.5 text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-800 text-xs leading-4 font-medium bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-100 rounded-full ml-12">Laravel</span>
                        </div>
                        <p class="mt-1 text-gray-500 text-sm leading-5 truncate">Signed route magic login for Laravel</p>
                    </div>
                </div>
                <div class="border-t border-gray-200">
                    <div class="-mt-px flex">
                        <div class="w-0 flex-1 flex border-r border-gray-200">
                            <a href="https://github.com/grosv/laravel-passwordless-login" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                <i class="fa fa-github"></i>
                                <span class="ml-3">GitHub</span>
                            </a>
                        </div>
                        <div class="-ml-px w-0 flex-1 flex">
                            <a href="/demo/passwordless_login" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                <i class="fa fa-eye"></i>
                                <span class="ml-3">Demo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-span-1 bg-white rounded-lg shadow">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                    <div class="flex-1 truncate">
                        <div class="flex items-center space-x-3">
                            <h3 class="text-gray-900 text-sm leading-5 font-medium truncate">Eloquent Sheets</h3>
                            <span class="flex-shrink-0 inline-block px-2 py-0.5 text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-800 text-xs leading-4 font-medium bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-100 rounded-full ml-12">Laravel</span>
                        </div>
                        <p class="mt-1 text-gray-500 text-sm leading-5 truncate">Use Google Sheets as a Data Source</p>
                    </div>
                </div>
                <div class="border-t border-gray-200">
                    <div class="-mt-px flex">
                        <div class="w-0 flex-1 flex border-r border-gray-200">
                            <a href="https://github.com/grosv/eloquent-sheets" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                <i class="fa fa-github"></i>
                                <span class="ml-3">GitHub</span>
                            </a>
                        </div>
                        <div class="-ml-px w-0 flex-1 flex">
                            <button class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150 disabled cursor-not-allowed opacity-50">
                                <i class="fa fa-eye"></i>
                                <span class="ml-3">Demo</span>
                            </button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>
    <!-- r::open-source -->
@endsection
