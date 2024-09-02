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

    public $folder_name = '';

    public function rules() {
        return [
            'name' => 'required|min:4|unique:modules',
        ];
    }

    public function save() {

        $this->validate();

        $replace_name = str_replace(" ", '', trim($this->name));
        $name         = Str::ucfirst($replace_name);
        $name_lower   = Str::lower($this->name);

        $module = Module::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);

        if (!empty($this->folder_name)) {

            $replace_folder_name = str_replace(" ", '_', trim($this->folder_name));
            $folder_name         = Str::ucfirst($replace_folder_name);

            Artisan::call("make:model " . $name . " -m --policy");
            Artisan::call("make:controller " . $folder_name . '/' . $name . "Controller -r");

        } else {
            Artisan::call("make:model " . $name . " -mcr --policy");
        }

        $arrayOfPermissionNames = [
            'view list ' . $name_lower,
            'view own list ' . $name_lower,
            'create ' . $name_lower,
            'update ' . $name_lower,
            'update own ' . $name_lower,
            'delete ' . $name_lower,
            'delete won ' . $name_lower,
            'restore ' . $name_lower,
            'restore own ' . $name_lower,
            'force delete ' . $name_lower,
            'force delete own ' . $name_lower,
        ];

        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) use ($module) {
            return [
                'name'       => $permission,
                'module_id'  => $module->id,
                'guard_name' => 'web',
            ];
        });

        Permission::insert($permissions->toArray());

        flash()->success('User saved successfully!');
        return redirect()->to('/dashboard/module/create');
    }

    public function render() {
        return view('livewire.create-module');
    }
}
