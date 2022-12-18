<?php

namespace App\View\Components;

use App\Models\Person;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostComponent extends Component
{
    public function __construct(
        public Person        $person,
        public Post $post,
    )
    {}

    public function render(): View
    {
        return view('components.post');
    }
}
