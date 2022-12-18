<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke(Person $person, Post $post)
    {

        return view('post', [
            'post' => $post,
            'person' => $person,
        ]);
    }
}
