<?php

namespace App\Http\Livewire\Components\Form;

use Livewire\Component;

class ExperienceFields extends Component
{
    public $list = [];
    public $label;

    public function mount($label)
    {

        $this->label = $label;
    }

    public function addField()
    {
        $newChild = [];
        $this->list[] = $newChild;
    }

    public function render()
    {
        return view('livewire.components.form.experience-fields');
    }
}