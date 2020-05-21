<div id="app">

    <main class="mt-12">
        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6">
                <div class="rounded-lg min-h-96 p-6">
                    @yield('content')
                </div>
            </div>
            <!-- /End replace -->


            @include('layouts.footers.' . config('theme.footer', 'simple_social'))




        </div>
    </main>
</div>
