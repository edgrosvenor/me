@extends('layouts.app')
@section('content')
    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                Congratulations! You're logged in!
                <br />
                There's nothing to actually do here.
            </h2>
            <div class="mt-8 flex justify-center">
                <div class="inline-flex rounded-md shadow">
                    <button onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600 hover:bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        Log Out
                    </button>
                </div>
                <div class="ml-3 inline-flex">
                    <button onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-700 bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-100 hover:text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600 hover:bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-50 focus:outline-none focus:shadow-outline focus:border-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-300 transition duration-150 ease-in-out">
                        Seriously, Log Out
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- r::home -->
@endsection
