<?php

namespace App\Livewire;

use App\Models\Module;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CreateModule extends Component
{

    // #[Validate]
    public $name        = '';
    public $folder_name = '';
    public $permission;
    public $view;
    public $livewire_component;
    public $mcrp;

    public function rules()
    {
        return [
            'name' => 'required|min:4',
        ];
    }

    public function save()
    {

        $this->validate();

        $replace_name = str_replace(" ", '', trim($this->name));
        $name         = Str::ucfirst($replace_name);
        $name_lower   = Str::lower($replace_name);

        $moduleOldData = Module::where('slug', $name_lower)->first();

        if (empty($moduleOldData)) {
            $moduleOldData = [
                'permission'         => null,
                'view'               => null,
                'livewire_component' => null,
                'mcrp'               => null,
            ];
        }

        $moduleData = Module::updateOrCreate(
            [
                'name' => $name,
            ],
            [
                'slug'               => Str::slug($name),
                "permission"         => $this->permission ?? @$moduleOldData->permission,
                "view"               => $this->view ?? @$moduleOldData->view,
                "livewire_component" => $this->livewire_component ?? @$moduleOldData->livewire_component,
                "mcrp"               => $this->mcrp ?? @$moduleOldData->mcrp,
            ]
        );
        flash()->success('Module created!');

        //create permission
        if ($this->permission) {
            $permissionData = Permission::where('module_id', $moduleData->id)->get();
            if ($permissionData->isEmpty()) {
                $arrayOfPermissionNames = [
                    $name_lower . ' view list',
                    $name_lower . ' create',
                    $name_lower . ' update',
                    $name_lower . ' delete',
                    $name_lower . ' restore',
                    $name_lower . ' force delete',
                ];

                $permissions = collect($arrayOfPermissionNames)->map(function ($permission) use ($moduleData) {
                    return [
                        'name'       => $permission,
                        'module_id'  => $moduleData->id,
                        'guard_name' => 'web',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                });

                Permission::insert($permissions->toArray());
                flash()->success('Permission create successfull!');
            }
        }

        //Livewire component
        if ($this->livewire_component && $moduleOldData['livewire_component'] == null) {
            $createFileName = 'Livewire/' . $name . '/Create' . $name . '.php';
            $updateFileName = 'Livewire/' . $name . '/Update' . $name . '.php';

            $directory = app_path('Livewire/' . $name);

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0755, true);
            }

            if (!File::exists(app_path($createFileName))) {
                $contents = "<?php

                namespace App\\Livewire\\$name;

                use Livewire\\Component;

                class Create$name extends Component
                {
                    public function render()
                    {
                        return view('livewire.create-$name_lower');
                    }
                }";
                File::put(app_path($createFileName), $contents);
            }

            if (!File::exists(app_path($updateFileName))) {
                $contents = "<?php

                namespace App\\Livewire\\$name;

                use Livewire\\Component;

                class Update$name extends Component
                {
                    public function render()
                    {
                        return view('livewire.update-$name_lower');
                    }
                }";
                File::put(app_path($updateFileName), $contents);
            }

            //view
            $viewContent        = "<h1>Demo component!</h1>";
            $viewDirectory      = resource_path('views/livewire/' . $name_lower);
            $createViewFileName = resource_path('views/livewire/' . $name_lower . '/create-' . $name_lower . '.blade.php');
            $updateViewFileName = resource_path('views/livewire/' . $name_lower . '/update-' . $name_lower . '.blade.php');

            if (!File::exists($viewDirectory)) {
                File::makeDirectory($viewDirectory, 0755, true);
            }

            if (!File::exists($createViewFileName)) {
                File::put($createViewFileName, $viewContent);
            }

            if (!File::exists($updateViewFileName)) {
                File::put($updateViewFileName, $viewContent);
            }

            flash()->success('Livewire component created!');
        }

        // blade view
        if ($this->view && $moduleOldData['view'] == null) {
            $bladeViewDirectory = resource_path('views/' . $name_lower);
            $createViewBlade    = resource_path('views/' . $name_lower . '/create.blade.php');
            $viewCreate         = "<x-app-layout><livewire:create-$name_lower /></x-app-layout>";
            $updateViewBlade    = resource_path('views/' . $name_lower . '/edit.blade.php');
            $viewUpdate         = "<x-app-layout><livewire:update-$name_lower /></x-app-layout>";
            $indexViewBlade     = resource_path('views/' . $name_lower . '/index.blade.php');
            $showViewBlade      = resource_path('views/' . $name_lower . '/show.blade.php');

            if (!File::exists($bladeViewDirectory)) {
                File::makeDirectory($bladeViewDirectory, 0755, true);
            }
            if (!File::exists($createViewBlade)) {
                File::put($createViewBlade, $viewCreate);
            }
            if (!File::exists($updateViewBlade)) {
                File::put($updateViewBlade, $viewUpdate);
            }
            if (!File::exists($indexViewBlade)) {
                File::put($indexViewBlade, "<x-app-layout>demo page</x-app-layout>");
            }
            if (!File::exists($showViewBlade)) {
                File::put($showViewBlade, "<x-app-layout>demo page</x-app-layout>");
            }
            flash()->success('view blade file created!');
        }

        //Create model,controller,migration,policy,resource route
        if (!file_exists(app_path('Models/' . $name . ".php")) && $this->mcrp && $moduleOldData['mcrp'] == null) {
            if (!empty($this->folder_name)) {

                $replace_folder_name = str_replace(" ", '_', trim($this->folder_name));
                $folder_name         = Str::ucfirst($replace_folder_name);

                Artisan::call("make:model " . $name . " -m --policy");
                Artisan::call("make:controller " . $folder_name . '/' . $name . "Controller --model=$name --resource");
            } else {
                Artisan::call("make:model " . $name . " -mcr --policy");
            }
            flash()->success('Create model,controller,migration,policy,resource route created!');
        }

        flash()->success('All Done!');
        return redirect()->to('/dashboard/module/create');
    }

    public function render()
    {
        return view('livewire.create-module');
    }
}
