<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home
{
    public function __invoke()
    {
        return view('home');
    }
}
