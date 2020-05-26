<?php

namespace App\Http\Livewire;

use App\CloudinaryResource;
use Grosv\LaravelCloudinary\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ImageLibrary extends Component
{

    public $uploadProgress = 0;
    public $allTags = ['laravel', 'php', 'work', 'cycling', 'food', 'beer', 'travel', 'family'];
    public $keys = ['title', 'description', 'tags', 'source'];
    public $op = 'list';
    public $responseKey;
    public $resourceId;
    public $resource = [];
    public $title;
    public $description;
    public $tags;
    public $url;
    public $source;

    public function mount(Request $request)
    {
        $this->url = $request->url();
    }


    public function setOp($op)
    {
        if (in_array($op, ['list', 'add', 'edit'])) {
            $this->op = $op;
        }
    }

    public function editPhoto($id)
    {
        $this->resourceId = $id;
        $this->op = 'edit';
    }

    public function savePhoto()
    {
        CloudinaryResource::find($this->resourceId)->update([
            'title' => $this->title,
            'description' => $this->description,
            'tags' => $this->tags,
        ]);

        return redirect($this->url);
    }

    public function process()
    {
        $uploaded = (new Client())->upload(Storage::disk('s3')->url($this->responseKey), []);

        $new = CloudinaryResource::create([
            'user_id' => auth()->user()->id,
            'upload_response' => $uploaded,
            'resource_type' => 'image',
            'url' => $uploaded['secure_url'] ?? ''
        ]);

        $this->resourceId = $new->id;

        $this->op = 'edit';
    }

    public function updated($k, $v)
    {
        if (in_array($k, $this->keys) && $this->resourceId) {
            CloudinaryResource::find($this->resourceId)->update([$k => $v]);
        }
    }

    public function rehydrate()
    {
        if ($this->resourceId) {
            $this->resource = CloudinaryResource::find($this->resourceId);
            foreach ($this->keys as $key) {
                $this->$key = $this->resource->$key;
            }
        }

    }

    public function render()
    {
        sort($this->allTags);

        $this->rehydrate();

        if (auth()->user()->id !== 1) {
            $this->op = 'fuck-off';
        }

        return view('livewire.image-library-' . $this->op);
    }
}
