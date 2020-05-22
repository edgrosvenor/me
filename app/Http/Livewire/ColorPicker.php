<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ColorPicker extends Component
{

    public $page;

    public function mount()
    {
        $this->page = Request::url();
    }

    public function setColor($color)
    {
        if (in_array($color, config('theme.colors'))) {
            session(['theme_color' => $color]);
        } else {
            Session::forget('theme_color');
        }

        return redirect($this->page);

    }

    public function render()
    {
        return view('livewire.color-picker');
    }
}
