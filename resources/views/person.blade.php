<x-layout>
    <x-slot name="profile">
        <x-profile-header :person="$person"/>
    </x-slot>


@if ($person->suspended)
    <div class="max-w-lg mx-auto mt-24" x-data="{show: false}">
        <h1 class="text-4xl font-bold text-gray-900">Account suspended</h1>
        <p class="text-gray-600 mt-6">This account has been suspended for {{ $person->suspended }}. <button @click="show = true" class="text-blue-500 underline">Learn more</button></p>
        <div x-show="show" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                    <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                        <div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Just Kidding</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500 text-left">This is not a real social network and {{ $person->name }} does not actually have an account here. But if this were a real social network, {{ $person->suspended }} would definitely be against the rules.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <button @click="show = false" type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:text-sm">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@else
<div x-data="{filter: 'posts'}">
    <div class="mx-auto max-w-4xl">
        <div class="block">
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8 mx-4" aria-label="Tabs">
                    @php
                        $active = 'flex-1 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300
                whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-center font-bold text-black border-b
                border-blue-600';

                    $inactive = 'flex-1 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300
                whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm text-center';
                    @endphp
                    <a href="{{ route('person', ['person' => $person]) }}" class="{{ $filter === 'posts' ? $active : $inactive }}">Screeds</a>

                    <a href="{{ route('person', ['person' => $person, 'filter' => 'replies']) }}" class="{{ $filter === 'replies' ? $active : $inactive }}">Replies</a>

                    <a href="{{ route('person', ['person' => $person, 'filter' => 'media']) }}" class="{{ $filter === 'media' ? $active : $inactive }}">Media</a>

                    <a href="{{ route('person', ['person' => $person, 'filter' => 'likes']) }}" class="{{ $filter === 'likes' ? $active : $inactive }}">Likes</a>
                </nav>
            </div>
        </div>
    </div>

    @foreach ($posts->where('pinned', true)->sortByDesc('created_at') as $post)
        <x-post-component :post="$post" :person="$person"/>
    @endforeach
    @foreach ($posts->where('pinned', false)->sortByDesc('created_at') as $post)
        <x-post-component :post="$post" :person="$person"/>
    @endforeach
</div>

@endif
</x-layout>
