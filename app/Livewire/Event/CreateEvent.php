<?php

namespace App\Livewire\Event;

use App\Livewire\Forms\Event\CreateForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateEvent extends Component
{
    use WithFileUploads;
    public CreateForm $form;

    /**
     * Define method to store the resources
     * @return void
     */
    public function store(): void
    {
        $this->form->validate();
        
    }

    public function render()
    {
        return view('livewire.event.create-event');
    }
}
