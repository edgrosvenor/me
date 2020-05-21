@extends('layouts.app')
@section('head')

@endsection

@section('content')
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-4xl mx-auto ">
            @include('partials.header_menu')
                <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6 my-12">
                    <div class="-ml-4 -mt-2 flex items-center justify-between flex-no-wrap flex-grow">
                        <div class="ml-4 mt-2">
                            <h3 class="text-2xl leading-6 font-medium text-gray-900">
                                {{ $fm['title'] }}
                            </h3>

                        </div>
                        <div class="ml-4 mt-2 flex-wrap">
                            @foreach ($fm['tags'] ?? [] as $tag)
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-{{ config('theme.color', 'gray') }}-100 text-{{ config('theme.color', 'gray') }}-800 mb-2">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                <p class="text-gray-500 my-6">Published {{ \Carbon\Carbon::parse($fm['published_at'])->format('l F j, Y') }}</p>

                @if ($fm['unsplash'])
                <img src="https://images.unsplash.com/photo-{{ $fm['unsplash'] }}?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=800" alt="">
                @endif
                    <div class="markdown-body my-6">
                        {{ $content }}
                    </div>
            </div>
        </div>
    </div>


@endsection
