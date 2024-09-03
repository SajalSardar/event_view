<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Module') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form method="POST" wire:submit="save">
                    <div>
                        <x-input-label for="module_name" :value="__('Name')" />
                        <x-text-input id="module_name" class="block mt-1 w-full" type="text" :value="old('name')"
                            required autofocus wire:model.blur="name" />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    </div>
                    <div class="mt-3">
                        <x-input-label for="folder_name" :value="__('Folder Name')" />
                        <x-text-input id="folder_name" class="block mt-1 w-full" type="text" :value="old('folder_name')"
                            wire:model.blur="folder_name" />
                        <p class="opacity-75">Controller create in folder!</p>
                    </div>


                    <div class="flex items-center justify-end mt-4">


                        <x-primary-button class="ms-3">
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
