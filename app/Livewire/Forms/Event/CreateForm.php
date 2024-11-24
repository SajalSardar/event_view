<?php

namespace App\Livewire\Forms\Event;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    public ?string $title = null;

    public ?string $description = null;

    public ?string $category = null;

    public ?array $image = [];
}
