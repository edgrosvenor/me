@if ($person->id !== 1)
<div class="text-2xl font-bold text-black py-4"><a href="{{ route('person', ['person' => \App\Models\Person::first()]) }}"><i class="fa-regular fa-arrow-left mr-12"></i>Profile</a></div>
@endif
<div>
    <div>
        <img class="h-32 w-full object-cover lg:h-48"
             src="{{ $person->profile_banner }}"
             alt="">
    </div>
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
            <div class="flex">
                <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32"
                     src="{{ $person->profile_picture }}" alt="">
            </div>
        </div>

        <div class="text-right contents-right -my-10">
            <div class="inline-flex space-x-2">
                <x-header-buttons :person="$person"/>
            </div>
        </div>
    </div>
</div>


<div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 mt-12">
    <h1 class="truncate text-lg font-bold text-gray-900">
        <a href="{{ route('person', ['person' => $person]) }}">{{ $person->name }}</a>
    </h1>
    <div class="space-y-2">
        <p class="text-sm text-gray-600">{{ str($person->handle)->prepend('@') }} <span class="inline-flex items-center rounded-full bg-gray-100
        px-2.5 py-0.5 text-xs font-medium text-gray-800">{{ $person->follows }}</span></p>
        <p class="text-sm text-gray-800">{!! $person->bio !!}</p>

        <div class="text-xs text-gray-400 mt-2 space-x-6">
            @if ($person->location)
                <span class="text-gray-400"><i class="fa-regular fa-location-pin"></i> {{ $person->location }}</span>
            @endif
            @if ($person->work)
                <span class="text-gray-400"><i class="fa-regular fa-briefcase"></i> {{ $person->work }}</span>
            @endif
            @if ($person->link)
                <span class="text-gray-400"><a href="{{ $person->link }}"><i class="fa-regular fa-link"></i> {{ $person->link }}</a></span>
            @endif
        </div>

    </div>
</div>


