@if ($person->message_url)
    <a href="{{ $person->message_url }}" class="inline-flex items-center rounded-full
                            border border-gray-300 bg-white
                         px-2.5 py-1.5 font-medium text-gray-700 shadow-sm hover:bg-gray-50
                         focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        <i class="fa-regular fa-envelope"></i></a>
@endif

@if ($person->follow_url)
    <a @if ($person->id === 1) rel="me" @endif href="{{ $person->follow_url }}" class="inline-flex items-center rounded-full
                            border border-gray-300 bg-white
                         px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-50
                         focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Follow</a>


@endif

