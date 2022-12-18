<x-layout>
    <x-slot name="profile">
        <x-profile-header :person="$person"/>
    </x-slot>
    <div>
        <div class="flex border border-gray-50 p-6 space-x-3">
            <div class="flex-shrink-0">
                <img src="{{ $person->profile_picture }}" class="h-12 w-12 rounded-full">
            </div>
            <div class="flex-grow">
                <div>
                    <a class="font-bold text-black"><a href="{{ route('person', ['person' => $person]) }}">{{ $person->name }}</a></span>
                        <span
                            class="text-gray-600 text-sm">{{ str($person->handle)->prepend('@') }} &middot; {{ $post->created_at->diffForHumans(null, true, true) }}</span>
                </div>
                <div>

                        <p class="text-gray-800">{!! $post->body !!}</p>
                        @if ($post->image)
                            <img alt="{{ $post->image_alt }}" src="{{ $post->image }}" class="w-full mt-4">
                        @endif

                    <div class="mt-6">
                        <x-markdown theme="github" class="markdown-body">{!! $post->extended !!}</x-markdown>
                    </div>


                </div>
                <div class="flex mt-3 text-gray-600 text-sm">
                    <div class="flex-1">
                        <livewire:comments :post="$post"/>
                    </div>
                    <div class="flex-1">
                        <livewire:likes :post="$post"/>
                    </div>
                    <div class="flex-1">
                        <livewire:shares :post="$post"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
