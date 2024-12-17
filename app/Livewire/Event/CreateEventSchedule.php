<?php

namespace App\Livewire\Event;

use App\Models\Event;
use App\Models\EventSchedule;
use Livewire\Component;

class CreateEventSchedule extends Component
{
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

    /**
     * Define slot
     * @var ?string
     */
    public ?string $slot = null;

    /**
     * Summary of date
     * @var ?string
     */
    public ?string $date = null;
    public ?string $startTime = null;
    public ?string $endTime = null;
    public ?string $location = null;
    public ?string $street = null;
    public ?string $city = null;
    public ?string $state = null;
    public ?string $zip = null;

    public function store(): void
    {
        $this->validate($this->rules());
        $isCreate = EventSchedule::create($this->contract());
        $response = $isCreate ? 'Event Schedule has been added' : 'Something went wrong';
        flash()->success($response);
        $this->mount();
        $this->resetForm();
    }

    public function next()
    {
        $this->store();
        return redirect(route('admin.event.agenda.create', ['event' => $this->event->getKey()]));
    }

    public function mount()
    {
        $this->schedules = EventSchedule::query()->where('event_id', $this->event->getKey())->get();
    }

    /**
     * Define the validation rules
     * @return array
     */
    public function rules(): array
    {
        return [
            'slot'      => ['required'],
            'date'      => ['required'],
            'startTime' => ['required'],
            'endTime'   => ['required'],
            'location'  => ['required'],
            'street'    => ['required'],
            'city'      => ['required'],
            'state'     => ['required'],
            'zip'       => ['required'],
        ];
    }

    public function contract(): array
    {
        return [
            'slot'      => $this->slot,
            'event_id'  => $this->event->getKey(),
            'date'      => $this->date,
            'start'     => $this->startTime,
            'end'       => $this->endTime,
            'location'  => $this->location,
            'street'    => $this->street,
            'city'      => $this->city,
            'state'     => $this->state,
            'zip'       => $this->zip,
        ];
    }

    public function resetForm()
    {
        $this->slot = '';
        $this->date = null;
        $this->startTime = '';
        $this->location = '';
    }

    public function render()
    {
        return view('livewire.event.create-event-schedule');
    }
}
