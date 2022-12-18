<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke(Request $request, Person $person)
    {
        $person->loadMissing(['posts']);

        return view('person', [
            'person' => $person,
        ]);
    }
}
