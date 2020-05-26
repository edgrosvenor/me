<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class CloudinaryResource extends Model
{
    protected $guarded = [];
    protected $casts = ['upload_response' => 'array', 'tags' => 'array'];
    protected $attributes = ['upload_response' => '[]', 'tags' => '[]'];
    protected $appends = ['source'];

    public function getSourceAttribute()
    {
        return last(explode('/', str_replace('.heic', '.jpg', $this->url)));
    }

}
