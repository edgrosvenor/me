<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OpenSourceTest extends TestCase
{

    /** @test */
    public function it_can_load_the_page()
    {
        $this->get(route('open-source'))
            ->assertSuccessful()
            ->assertSee('r::open-source');
    }
}
