<?php

namespace App\Livewire\Forms\Event;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    public ?string $title = null;

    public ?string $description = null;

    public ?string $details = null;

    public ?string $organizer = null;

    public ?string $category = null;

    public ?array $image = [];

    /**
     * Define the validation rules
     * @return array
     */
    public function rules(): array
    {
        return [
            'title'         => 'required',
            'description'   => ['required', 'max:150'],
            'details'       => ['required'],
            'category'      => ['required'],
            'organizer'     => ['required'],
            'image'         => ['nullable'],
        ];
    }

    /**
     * Define all contract resources
     * @return array
     */
    public function contract()
    {
        return [
            'title'         => $this->title,
            'description'   => $this->description,
            'details'       => $this->details,
            'organizer_id'  => $this->organizer,
            'category_id'   => $this->category,
            'image'         => $this->image
        ];
    }
}
