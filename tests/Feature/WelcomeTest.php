<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeTest extends TestCase
{
    /** @test */
    public function it_opens_the_page()
    {
        $this->get(route('welcome'))
            ->assertSuccessful()
            ->assertSee('Ed Grosvenor')
            ->assertSee('MaybeEdward');
    }
}
