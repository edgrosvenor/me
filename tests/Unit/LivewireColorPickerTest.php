<?php

namespace Tests\Unit;

use App\Http\Livewire\ColorPicker;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireColorPickerTest extends TestCase
{

    /** @test */
    public function it_can_set_a_color()
    {
        Livewire::test(ColorPicker::class)
            ->call('setColor', 'red');

        $this->assertSame('red', session('theme_color'));
    }
}
