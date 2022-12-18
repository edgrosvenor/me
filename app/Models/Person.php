<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Person extends Model
{
    public function profilePicture(): Attribute
    {
        return Attribute::make(
            get: fn() => Str::contains($this->image, '://') ? $this->image : asset('images/' . $this->image),
        );
    }

    public function profileBanner(): Attribute
    {
        return Attribute::make(
            get: fn() => Str::contains($this->banner, '://') ? $this->banner : asset('images/' . $this->banner),
        );
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
