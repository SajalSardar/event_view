<div class="border border-slate-300 p-5 rounded md:w-6/12">
    <form wire:submit="saveMenu" method="POST">
        <div class="p-2 w-full">
            <x-forms.text-input type="text" wire:model.live="name" placeholder="Menu Name*" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="p-2 w-full">
            <x-forms.select-input wire:model="parent_id">
                <option selected value="">Select Parent (optional)</option>
                @foreach ($parent_menus as $parent_menu)
                    <option value="{{ $parent_menu->id }}">{{ $parent_menu->name }}</option>
                @endforeach
            </x-forms.select-input>
        </div>
        <div class="p-2 w-full">
            <x-forms.text-input type="text" wire:model.live="route" placeholder="Route name*" />
            <x-input-error :messages="$errors->get('route')" class="mt-2" />
        </div>
        <div class="p-2 w-full">
            <x-forms.text-input type="text" wire:model.live="url" placeholder="Url" />
            <x-input-error :messages="$errors->get('url')" class="mt-2" />
        </div>

        <div class="p-2 w-full">
            <textarea wire:model="icon" id="" rows="4" class="w-full" placeholder="Svg Icon"></textarea>
        </div>

        <div class="p-2 w-full">
            <x-forms.select-input wire:model="role" multiple>
                <option selected disabled> Select Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->name }}">{{ Str::ucfirst($role->name) }}</option>
                @endforeach
            </x-forms.select-input>
        </div>

        <div class="p-2 w-full">
            <x-forms.select-input wire:model.live="status">
                <option value="active" selected>Active</option>
                <option value="deactive">Deactive</option>
            </x-forms.select-input>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>


        <div class="p-2">
            <x-buttons.primary>
                Save
            </x-buttons.primary>
        </div>

    </form>

</div>
