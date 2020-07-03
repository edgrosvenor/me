<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Demo
{
    public function __invoke($demo)
    {
        abort_unless(method_exists($this, $demo), 404);
        return $this->$demo();
    }

    public function passwordless_login()
    {
        return view('demo.passwordless_login', ['link' => User::find(2)->createPasswordlessLoginLink()]);
    }

    public function sundial()
    {
        return view('demo.sundial');
    }
}
