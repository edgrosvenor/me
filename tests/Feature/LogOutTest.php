<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogOutTest extends TestCase
{

    /** @test */
    public function it_can_logout()
    {
        $this->actingAs(User::first())
            ->followingRedirects()
            ->post(route('logout'))
            ->assertSuccessful();

        $this->assertGuest();
    }
}
