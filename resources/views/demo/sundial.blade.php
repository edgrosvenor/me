@extends('layouts.app')
@section('content')
    @include('partials.header_menu')
    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-900 sm:text-4xl sm:leading-10 text-center">
        Try Sundial
        <br class="hidden sm:inline"/>
        <span class="text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600 text-2xl"
              id="sundial-headline">Type in a date and time string to see if Sundial can handle it:</span>
    </h2>
    <div class="flex flex-col">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Example String
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Expected To Work
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white">
                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                            January 9, 2012 at 2pm
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                            Yes
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                            Tomorrow at Noon
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                            Not Yet
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <livewire:sundial-demo></livewire:sundial-demo>
@endsection
