<?php

namespace App\Livewire\AdminUser;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Livewire\Forms\AdminUserCreateRequest;

class UpdateAdminUser extends Component
{
    /**
     * Define publlic property $roles
     * @var array|object
     */
    public array|object $roles;

    /**
     * Define public form method AdminUserCreateRequest $form;
     */
    public AdminUserCreateRequest $form;

    /**
     * Define public method mount()
     * @return void
     */
    public function mount(User $user): void
    {
        $this->form->name = $user->name;
        $this->form->email = $user->email;
        $this->form->password = $user->password;
        $this->form->role_id = $user->role_id;
    }

    public function render()
    {
        $this->roles = Role::query()->whereNotIn('id', [1])->get();
        return view('livewire.adminuser.update-adminuser');
    }
}
