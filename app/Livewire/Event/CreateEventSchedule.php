<?php

namespace App\Livewire\Event;

use Livewire\Component;

class CreateEventSchedule extends Component
{
    /**
     * Get the specific event collection
     * @var array|object
     */
    public array|object $event;

    public $date;
    public $startTime;
    public $endTime;
    public $location;
    public $street;
    public $zip;

    public function store()
    {
        // $this->validate($this->rules());
        dd($this->date);
    }

    /**
     * Define the validation rules
     * @return array
     */
    public function rules(): array
    {
        return [
            'date'      => ['required'],
            'startTime' => ['required'],
            'endTime'   => ['required'],
            'location'  => ['required'],
            'street'    => ['required'],
            'zip'       => ['required'],
        ];
    }

    public function render()
    {
        return view('livewire.event.create-event-schedule');
    }
}
