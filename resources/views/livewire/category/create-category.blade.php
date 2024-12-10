<div class="border border-slate-300 p-5 rounded">
    <div class="flex justify-end pb-3 fixed top-24 right-10">
        <a type="submit" class="px-8 py-2 bg-primary-400 text-white rounded" href="#">
            Category List
        </a>
    </div>
    <header class="flex justify-between mb-5">
        <h4>Category Create</h4>
    </header>
    <form wire:submit="store">
        <div class="flex justify-between">
            <div class="p-2 w-full">
                <x-forms.text-input type="text" wire:model="title" placeholder="Category Title" />
            </div>
        </div>
        <div class="flex justify-between">
            <select wire:model="status">
                <option>Select Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <div class="p-2">
            <x-buttons.primary>
                Save
            </x-buttons.primary>
        </div>

    </form>
</div>