@extends('layouts.app')
@section('content')

    <div class="relative bg-gray-50  pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">

        <div class="relative max-w-7xl mx-auto">
            @include('partials.header_menu')
            <div class="text-center">
                <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Locations / Hours
                </h2>
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{ asset('images/wildwood.jpg') }}" alt="" />
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm leading-5 font-medium text-indigo-600">
                                <a href="#" class="hover:underline">
                                    Suburban Chicago, Illinois
                                </a>
                            </p>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Tuesday & Thursday 9pm to 11pm CDT
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Office hours are currently limited to remote only. I'm happy to pair on a project, chat on Zoom, or provide feedback on a piece of work. Contact me via Telegram to schedule time.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{ asset('images/cambridge.jpg') }}" alt="" />
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm leading-5 font-medium text-indigo-600">
                                <a href="#" class="hover:underline">
                                    Cambridge, Massachusetts
                                </a>
                            </p>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Currently Closed Because of Germs <i class="fa fa-virus"></i>
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Based on the current COVID-19 outlook for both Illinois and Massachusetts, I do not expect to return to the Boston area until at least mid-July.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{ asset('images/auckland.jpg') }}" alt="" />
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm leading-5 font-medium text-indigo-600">
                                <a href="#" class="hover:underline"> Pop Up Locations</a>
                            </p>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    None Currently Scheduled
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    I do not anticipate doing any international travel in 2020. We are tentatively looking at a return to New Zealand in late 2021, COVID willing.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50">
            <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    About My Office Hours
                </h2>
                <div class="mt-6 border-t-2 border-gray-200 pt-6">
                    <dl>
                        <div class="md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                What exactly are "office hours"?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    I've been a developer for a couple of decades now and I recognize the importance of getting away from my own screen and my own projects once in a while. I grow as a developer by helping others grow. So I make myself available to mentor, debug, or do what I can to move roadblocks out of the way of developers who need it. To that end, I set aside a little of my week specifically for this purpose.
                                </p>
                            </dd>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6 md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                What do I do with unused office hours?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    I work on open source. Usually my own stuff, but if a maintainer I follow has put out a call for help on something I'll often give it a try. If you want another pair of eyes on your open source project, let me know!
                                </p>
                            </dd>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6 md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                Why does location matter?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    It mostly doesn't. But before COVID-19 I held some of my office hours in person. Mentoring over coffee, iterating over a conference talk, etc. I hope to get back to that again when doing so becomes safe and feasible again.
                                </p>
                            </dd>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6 md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base leading-6 font-medium text-gray-900 md:col-span-5">
                                Why such antisocial hours?
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base leading-6 text-gray-500">
                                    COVID-19 has caused major disruptions in everyone's lives. For me and my family, it's meant figuring out how to maintain two full-time jobs from home with a 4-year-old and a grumpy teenager. That's mostly meant me doing the bulk of my work over night and just being dad during the day.
                                </p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <!-- r::location -->
@endsection
