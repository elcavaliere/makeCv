<?php

namespace App\Http\Livewire\Cv;

use Livewire\Component;

class Create extends Component
{

    public $header;

    public function mount()
    {
        $this->header = 'Cv/Make';
    }

    public function render()
    {
        return view('livewire.cv.create')->extends('layouts.app');
    }
}
