<?php

namespace App\Livewire\Event;

use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateEvent extends Component
{
    use WithFileUploads;

    /**
     * Event title
     * @var ?string
     */
    public ?string $title = null;

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
     * Define status 
     * @var ?string
     */
    public ?string $status;

    /**
     * Event image(s)
     */
    public $image;

    /**
     * Define method to store the resources
     * @return RedirectResponse
     */
    public function store()
    {
        $this->validate($this->rules());
        $isCreate = Event::create($this->contract());
        $response = $isCreate ? 'Data has been stored successfully' : 'Something went wrong';
        flash()->success($response);
        return redirect(route('admin.event.schedule.create', ['event' => $isCreate->getKey()]));
    }

    public function rules(): array
    {
        return [
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:150'],
            'details'     => ['required', 'string'],
            'category'    => ['required', 'exists:categories,id'],
            'organizer'   => ['required', 'exists:users,id'],
            'status'      => ['required', 'in:0,1'],
            'image'       => ['nullable', 'image', 'max:1024'],
        ];
    }

    /**
     * Map the form data to the corresponding model attributes.
     * @return array
     */
    public function contract(): array
    {
        return [
            'title'        => $this->title,
            'description'  => $this->description,
            'details'      => $this->details,
            'organizer_id' => $this->organizer,
            'category_id'  => $this->category,
            'status'       => $this->status
        ];
    }

    public function render()
    {
        return view('livewire.event.create-event');
    }
}
