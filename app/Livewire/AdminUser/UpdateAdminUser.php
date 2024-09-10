<?php

namespace App\Livewire\AdminUser;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Livewire\Forms\AdminUserUpdateRequest;

class UpdateAdminUser extends Component
{
    /**
     * Define publlic property $roles
     * @var array|object
     */
    public array|object $roles;

    /**
     * Define public property $user;
     */
    public $user;

    /**
     * Define public form method AdminUserUpdateRequest $form;
     */
    public AdminUserUpdateRequest $form;

    /**
     * Define public method mount()
     * @return void
     */
    public function mount(): void
    {
        $this->form->name = $this->user?->name;
        $this->form->email = $this->user?->email;
        $this->form->password = $this->user?->password;
        $this->form->role_id = $this->user?->role_id;
        // $this->form->validate();
         
    }

    public function render()
    {
        $this->roles = Role::query()->whereNotIn('id', [1])->get();
        return view('livewire.adminuser.update-adminuser');
    }
}
