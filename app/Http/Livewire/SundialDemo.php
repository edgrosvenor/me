<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Grosv\Sundial\DateTimeOutOfRangeException;
use Grosv\Sundial\Parser;
use Livewire\Component;

class SundialDemo extends Component
{
    public $parsed;
    public $raw;
    public $stt;

    public function mount()
    {
        $this->parsed = '';
    }

    public function updatedRaw()
    {
        try {
            $parsed = (new Parser())->parse($this->raw)->toFormat('l F j, Y h:i A');
        } catch(DateTimeOutOfRangeException $e) {
            $parsed = 'Out of range error';
        }

        $this->stt = date('l F j, Y h:i A', strtotime($this->raw));


        $this->parsed = $parsed;
    }

    public function render()
    {
        return view('livewire.sundial-demo');
    }
}
