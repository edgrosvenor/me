<div>
    <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="photo" class="block text-sm leading-5 font-medium text-gray-700">
            Upload Your Video
        </label>
        <div class="mt-2 sm:mt-0 sm:col-span-2">
            <div class="flex items-center">
                @if ($videoStatus != 'processing')
                    <div>@if ($videoStatus == 'ready')
                            <video class="w-1/2" src="{{ $videoUrl }}" type="video/mp4" controls></video>
                        @endif</div>
                    <span class="ml-5 rounded-md shadow-sm">
                            <button onclick="document.getElementById('video').click()" type="button"
                                    class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                Change
                            </button>
                            <input accept="video/*" type="file" id="video" wire:model="video" class="hidden">
                            <div wire:loading wire:target="video">Uploading...</div>
                            @error('video') {{ $message }} @enderror
                        </span>
                @else
                    Your video was uploaded and is in line to be processed. This might take several minutes.
                @endif
            </div>
        </div>
    </div>
</div>
