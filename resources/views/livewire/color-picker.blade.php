<div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 flex-row text-center content-center items-center">

    @foreach (config('theme.colors') ?? [] as $color)
        <span class="flex-1 rounded-md shadow-sm">
                <button wire:click="setColor('{{$color}}')" type="button"
                        class="cursor-pointer inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-{{ $color }}-600 hover:bg-{{ $color }}-500 focus:outline-none focus:border-{{ $color }}-700 focus:shadow-outline-{{ $color }} active:bg-{{ $color }}-700 transition ease-in-out duration-150">
                    {{ ucfirst($color) }}
                </button>
            </span>
    @endforeach
    <span class="inline-flex rounded-md shadow-sm">
                <a wire:click="setColor('random')" type="button"
                   class="cursor-pointer inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                    Random
                </a>
            </span>
</div>
