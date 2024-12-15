<?php

namespace App\Livewire\Forms\Event;

use Livewire\Form;

class CreateForm extends Form
{
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
     * Event image(s)
     * @var mixed
     */
    public $image;

    /**
     * Validation rules
     * @return array
     */
    public function rules(): array
    {
        return [
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:150'],
            'details'     => ['required', 'string'],
            'category'    => ['required', 'exists:categories,id'],
            'organizer'   => ['required', 'exists:organizers,id'],
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
            'image'        => $this->image,
        ];
    }
}
