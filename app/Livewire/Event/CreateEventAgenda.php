<?php

namespace App\Livewire\Event;

use Livewire\Component;
use App\Models\EventSchedule;
use App\Livewire\Forms\Event\Agenda\CreateForm;
use App\Models\EventAgenda;
use Livewire\WithFileUploads;

class CreateEventAgenda extends Component
{
    use WithFileUploads;

    /**
     * Define Form event
     * @var CreateForm $form
     */
    public CreateForm $form;

    /**
     * Get the specific event collection
     * @var array|object
     */
    public array|object $event;

    /**
     * Define the schedules
     * @var array|object
     */
    public array|object $schedules;

    public function mount(): void
    {
        $this->schedules = EventSchedule::query()->where('event_id', $this->event->getKey())->get();
    }

    public function store(): void
    {
        $this->form->validate();
        $isCreate = EventAgenda::create($this->form->contract($this->event->getKey()));
        $response = $isCreate ? 'Event Agent added successfully' : 'Something went wrong';
        flash()->success(message: $response);
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.event.create-event-agenda');
    }
}
