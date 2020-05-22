@extends('layouts.app')

@section('content')
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-4xl mx-auto ">
            @include('partials.header_menu')
            <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6 my-12">
                <div class="-ml-4 -mt-2 flex items-center justify-between flex-no-wrap flex-grow">
                    <div class="ml-4 mt-2">
                        <h3 class="text-2xl leading-6 font-medium text-gray-900">
                            Demo: Laravel Passwordless Login
                        </h3>

                    </div>
                    <div class="ml-4 mt-2 flex-wrap">

                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-100 text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-800 mb-2">
                                    Laravel
                                </span>

                    </div>
                </div>

                <div class="markdown-body my-6">
                    <p>Using a signed route, I can log you into this site without you needing a password.</p>
                    <pre><code class="language-php">
                            echo App\User::find(2)->createPasswordlessLoginLink();
                        </code></pre>
                    <p><a href="{{$link}}">{{$link}}</a></p>
                    <p>This package provides a trait that makes it easy to configure things like the expiration time for the link, whether it is single use or can be used multiple times, and where the user should redirect after logging in. It works with custom authentication middleware so you can use it with multiple user types side by side.</p>
                </div>


                <img
                    src="https://images.unsplash.com/photo-1522251670181-320150ad6dab??crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=800"
                    alt="">


                <a href="https://github.com/edgrosvenor/me/tree/master/resources/views/demo/passwordless-login.blade.php"
                   target="_blank">
                    <div class="rounded-md bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="ml-3 flex-1 md:flex md:justify-between">
                                <p class="text-sm leading-5 text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-700">
                                    Did you find a mistake? Have something to add? This demo is on GitHub. Send me a PR!
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection
