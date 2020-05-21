<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogOut
{
    public function __invoke()
    {
        Auth::logout();
        return redirect(route('welcome'));
    }
}
