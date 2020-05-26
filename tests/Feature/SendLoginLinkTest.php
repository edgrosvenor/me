<?php

namespace Tests\Feature;

use App\Mail\LoginLinkMailer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class SendLoginLinkTest extends TestCase
{

    /** @test */
    public function it_can_send_the_login_link()
    {
        Mail::fake();

        Mail::assertNothingSent();

        $this->get('/'.config('env.send_login_link'))
            ->assertSuccessful();

        Mail::assertSent(LoginLinkMailer::class);
    }
}
