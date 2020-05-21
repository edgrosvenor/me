<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class Welcome
{
    public function __invoke(Request $request)
    {
        $colors = ['gray', 'red', 'orange', 'yellow', 'green', 'teal', 'blue', 'indigo', 'purple', 'pink'];
        if ($request->has('color') && in_array($request->color, $colors)) {
            Config::set('theme.color', $request->color);
        }

        return view('welcome', ['colors' => $colors]);
    }
}
