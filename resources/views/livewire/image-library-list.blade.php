<div>
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
        <button wire:click="setOp('add')" type="button"
                class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
          <i class="fa fa-upload mr-2"></i> Upload A Photo
        </button>
      </span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul>
            @foreach (\App\CloudinaryResource::all() as $image)
                <li wire:click=editPhoto('{{$image->id}}')" class="border-t border-gray-200 cursor-pointer">
                    <div class="flex">
                        <div class="w-1/6">
                            <img src="{{ cloudinary($image->source, 'thumbnail') }}" alt="">
                        </div>
                        <div class="w-5/6 text-left">
                            <div class="p-4">{{ $image->title ?? 'Untitled Image' }}</div>
                            <div class="px-4 text-xs text-gray-500">
                                {{ $image->description ?? 'No Description' }}
                            </div>

                            <div class="p-4 text-xs text-gray-500">
                                Tags: {{ join(', ', $image->tags) }}
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
