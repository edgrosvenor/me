<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class HomeTest extends TestCase
{

    /** @test */
    public function it_can_load_the_page()
    {
        $this->actingAs(User::first())
            ->get(route('home'))
            ->assertSuccessful()
            ->assertSee('r::home');
    }

    /** @test */
    public function i_is_the_default_landing_page_after_login()
    {
        $this->followingRedirects()
            ->get(User::first()->createPasswordlessLoginLink())
            ->assertSuccessful()
            ->assertSee('r::home');
    }
}
