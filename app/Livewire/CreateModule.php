<?php

namespace App\Livewire;

use App\Models\Module;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CreateModule extends Component {

    #[Validate]
    public $name = '';
    public $guard = '';

    public function rules() {
        return [
            'name'  => 'required|min:4|capi',
            'guard' => 'required',
        ];
    }

    public function save() {

        $this->validate();

        $name = Str::ucfirst($this->name);

        $module = Module::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);

        Artisan::call("make:model " . $name . " -mcr --policy");

        $arrayOfPermissionNames = [
            'view list',
            'view own list',
            'create',
            'update',
            'update own',
            'delete',
            'delete won',
            'restore',
            'restore own',
            'force delete',
            'force delete own',
        ];

        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) use ($module) {
            return [
                'name'       => $permission,
                'module_id'  => $module->id,
                'guard_name' => $this->guard,
            ];
        });

        Permission::insert($permissions->toArray());

        return redirect()->to('/dashboard/module/create');
    }

    public function render() {
        return view('livewire.create-module');
    }
}
