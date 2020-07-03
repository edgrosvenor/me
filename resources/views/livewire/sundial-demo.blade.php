<div>
    <div class="bg-white>
        <div class=" max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8
    ">

    <form class="mt-8 mx-auto sm:flex" aria-labelledby="sundial-headline">
        <input wire:model.lazy="raw" aria-label="Date and time string field" type="text" required
               class="appearance-none w-full px-5 py-3 border border-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-300 text-base leading-6 rounded-md text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-900 bg-white placeholder-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-500 focus:outline-none focus:shadow-outline focus:border-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-300 transition duration-150 ease-in-out sm:max-w-xl"
               placeholder="11:30 am on July 11th, 2014"/>
        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
            <button type="button"
                    class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600 hover:bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                Parse It
            </button>
        </div>

    </form>
    <div class="text-gray-500 text-xs m-4">Enter any absolute date / time string between {{ date('l F j, Y h:i A', 1)  }} and {{ date('l F j, Y h:i A', 2147483647)  }}.</div>
    @if ($parsed)
        <div class="rounded-md bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-50 p-4">
            <div class="flex">
                <div class="ml-3 flex-1 md:flex md:justify-between">
                    <p class="text-sm leading-5 text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-700">
                        {{ $parsed }}
                    </p>
                    <p class="mt-3 text-sm leading-5 md:mt-0 md:ml-6">
                        <a target="_blank" href="https://github.com/grosv/sundial/issues/2"
                           class="whitespace-no-wrap font-medium text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-700 hover:text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600 transition ease-in-out duration-150">
                            Report An Error &rarr;
                        </a>
                    </p>
                </div>
            </div>
            <div class="p-4 italic text-gray-500 text-xs">strtotime() result: {{ $stt }}
        </div>
    @endif
</div>
</div>
</div>
