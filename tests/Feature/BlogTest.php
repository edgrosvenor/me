<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{

    /** @test */
    public function it_can_load_the_page()
    {
        $this->get(route('blog'))
            ->assertSuccessful()
            ->assertSee('r::blog');
    }
}
