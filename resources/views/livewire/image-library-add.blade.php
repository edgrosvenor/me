<div>
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-no-wrap">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Photo Gallery
                </h3>
            </div>
            <div class="ml-4 mt-2 flex-shrink-0">
      <span class="inline-flex rounded-md shadow-sm">
        <button wire:click="setOp('list')" type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
          <i class="fa fa-times mr-2"></i> Cancel Upload
        </button>
      </span>
            </div>
        </div>
    </div>
    <div class="md:grid md:grid-cols-4 md:gap-6">
        <div class="md:col-span-2">
            @if ($uploadProgress > 0)
                <div>Uploading... {{ $uploadProgress }}%</div>
                @if ($uploadProgress > 99)
                    <div class="rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-green-800">
                                    Your image is being processed. You will be redirected to the data form when it finishes. This process can take several minutes.
                                </p>
                            </div>
                            <div class="ml-auto pl-3">
                                <div class="-mx-1.5 -my-1.5">
                                    <button class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="mt-6">
                <div class="mt-2 flex items-center">
                    <span class="ml-5 rounded-md shadow-sm">
                        <input type="file" id="file" accept="image/*, .heic, .heif" class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script>
        let file = document.getElementById('file');
        file.addEventListener('change', (event) => {
            console.log('file changed')
            Vapor.store(file.files[0], {
                progress: progress => {
                @this.set('uploadProgress', Math.round(progress * 100))
                }
            }).then(response => {
            @this.set('uploadProgress', 0)
            @this.set('responseKey', response.key)
            @this.call('process')
            });
        });
    </script>
</div>


