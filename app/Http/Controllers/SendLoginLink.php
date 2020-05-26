<?php

namespace App\Http\Controllers;

use App\Mail\LoginLinkMailer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SendLoginLink
{
    public function __invoke(Request $request)
    {
        if (!Str::contains($request->url(), config('env.send_login_link'))) {
            abort(401);
        }
        Mail::to(User::find(1))->send(new LoginLinkMailer(User::find(1)));
        return response()->noContent();
    }
}
