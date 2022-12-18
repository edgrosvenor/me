<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function postUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->url !== null ? $this->url : route('post', ['post' => $this, 'person' => $this->person]),
        );
    }
}
