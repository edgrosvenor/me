<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class MastodonCallback extends Controller
{
    public function __invoke(Request $request)
    {
        $domain = session('mastodon_domain');
        $server = session('mastodon_server');

        config(['services.mastodon.domain' => $domain]);
        config(['services.mastodon.client_id' => $server->client_id]);
        config(['services.mastodon.client_secret' => $server->client_secret]);

        $user = Socialite::driver('mastodon')->user();
        dd($user);
    }
}
