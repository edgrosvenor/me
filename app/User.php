<?php

namespace App;

use Grosv\LaravelPasswordlessLogin\Traits\PasswordlessLogin;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Sushi\Sushi;

class User extends Authenticatable
{
    use Notifiable, PasswordlessLogin, Sushi;

    protected $rows = [
        [
            'name' => 'Ed Grosvenor',
            'email' => 'ed@gros.co',
        ],
    ];

    public function getRedirectUrlAttribute(): string
    {
        return route('home');
    }
}
