<div x-show.transition="open" x-data="{ open: true }" class="fixed bottom-0 inset-x-0 pb-2 sm:pb-5">
    <div class="max-w-screen-xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="p-2 rounded-lg bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600 shadow-lg sm:p-3">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
          <span class="flex p-2 rounded-lg bg-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-300">
            <i class="fa fa-cookie-bite"></i>
          </span>
                    <p class="ml-3 font-medium text-white truncate">

                    {{ \Illuminate\Foundation\Inspiring::quote() }}

                    </p>
                </div>
                <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                    <div class="rounded-md shadow-sm">
                        <button @click="open = false" class="js-cookie-consent-agree cookie-consent__agree flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-600 bg-white hover:text-{{ session('theme_color', config('theme.colors')[substr(time(), -1)]) }}-500 focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
                            Cool
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



