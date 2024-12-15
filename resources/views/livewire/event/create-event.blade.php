<form wire:submit="store" class="ml-6">
    @include('livewire.event.partials.step')

    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 mt-8">



        <div class="border border-base-500 p-6 rounded">
            <div class="mb-5">
                <div class="flex justify-between items-center">
                    <h3 class="text-title pb-1">What is this event about?</h3>
                    <x-svg.down-arrow />
                </div>
                <p class="text-paragraph">A concise and engaging description of your event. Use a clear and descriptive title that conveys the essence of your event.</p>
            </div>

            <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 sm:gap-1 md:gap-2">
                <div class="w-full">
                    <x-forms.label for="title" required='yes'>
                        {{ __('Category title') }}
                    </x-forms.label>
                    <x-forms.text-input type="text" wire:model.live='title' placeholder="Category title" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
            </div>

            <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 sm:gap-1 md:gap-2 mt-2">
                <div class="w-full">
                    <x-forms.label for="description" required='yes'>
                        {{ __('Category description') }}
                    </x-forms.label>
                    <x-forms.text-input type="text" wire:model.live='description' placeholder="Category description" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>
            </div>
            <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 sm:gap-1 md:gap-2 mt-2">
                <div class="w-full">
                    <x-forms.label for="description" required='yes'>
                        {{ __('About this event') }}
                    </x-forms.label>
                    <div wire:ignore>
                        <textarea wire:ignore cols="30" id="editor" rows="10" wire:model.live='details' class="w-full py-3 text-base font-normal font-inter border border-slate-400 rounded" placeholder="Add description here.."></textarea>
                    </div>
                    <x-input-error :messages="$errors->get('details')" class="mt-2" />
                </div>
            </div>

            <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 sm:gap-1 md:gap-2">
                <div class="pt-2 w-full">
                    <x-forms.label for="status" required='yes'>
                        {{ __('Status') }}
                    </x-forms.label>
                    <x-forms.select-input wire:model.live="status">
                        <option selected>--Select Status--</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </x-forms.select-input>

                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div>
            </div>

            <div class="pt-6">
                <x-buttons.primary>
                    Create
                </x-buttons.primary>
            </div>
        </div>
    </div>
</form>