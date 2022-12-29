<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Post;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke(Request $request, Person $person, string $filter = 'posts')
    {

        $posts = match($filter) {
            'posts' => Post::where('person_id', $person->id)
                ->where('type', 'post')->orderBy('created_at', 'desc')->paginate(20),
            'media' => Post::where('person_id', $person->id)
                ->where('type', 'media')->orderBy('created_at', 'desc')->paginate(20),
            'replies' => Post::where('person_id', $person->id)
                ->where('type', 'response')->orderBy('created_at', 'desc')->paginate(20),
            'likes' => Post::where('type', 'like')->orderBy('created_at', 'desc')->paginate(20),
        };

        return view('person', [
            'person' => $person,
            'posts' => $posts,
            'filter' => $filter,
        ]);
    }
}
