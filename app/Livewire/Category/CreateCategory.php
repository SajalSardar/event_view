<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    /**
     * Define title
     * @var ?string
     */
    public ?string $title = null;

    /**
     * Define status
     * @var ?string
     */
    public ?string $status = null;

    public function render()
    {
        return view('livewire.category.create-category');
    }

    public function store(): void
    {
        $instance = Category::query()->create($this->contract());
        $this->reset();
    }

    public function contract(): array
    {
        return [
            'title'     => $this->title,
            'status'    => $this->status,
        ];
    }
}
