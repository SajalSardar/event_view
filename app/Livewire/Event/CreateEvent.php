<?php

namespace App\Livewire\Event;

use App\Livewire\Forms\Event\CreateForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateEvent extends Component
{
    use WithFileUploads;
    // public CreateForm $form;

    /**
     * Event title
     * @var ?string
     */
    public ?string $title = '';

    /**
     * Event description (short)
     * @var ?string
     */
    public ?string $description = null;

    /**
     * Event details (long description)
     * @var ?string
     */
    public ?string $details = null;

    /**
     * Organizer ID
     * @var ?string
     */
    public ?string $organizer = null;

    /**
     * Category ID
     * @var ?string
     */
    public ?string $category = null;

    /**
     * Event image(s)
     * @var mixed
     */
    public $image;

    /**
     * Define method to store the resources
     * @return void
     */
    public function store(): void
    {
        dd($this->title);
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:150',
            'details' => 'required|string',
            'image' => 'nullable|image|max:10240',
            'organizer' => 'required|exists:organizers,id',
            'category' => 'required|exists:categories,id',
        ]);

         
         
    }

    public function render()
    {
        return view('livewire.event.create-event');
    }
}
