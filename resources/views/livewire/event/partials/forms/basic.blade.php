<form wire:submit="store">
    <div class="mb-2">
        <x-forms.label for="form.title" required="yes">
            {{__('Event Title')}}
        </x-forms.label>
        <x-forms.text-input wire.model="form.title" />
        <x-input-error :messages="$errors->get('form.title')" class="mt-2" />
    </div>
    <div class="mb-2">
        <x-forms.label for="form.description" required="yes">
            {{__('Event short Description')}}
        </x-forms.label>
        <x-forms.text-input wire.model="form.description" />
        <x-input-error :messages="$errors->get('form.description')" class="mt-2" />
    </div>

    <div class="mb-2">
        <x-forms.label for="form.details">
            {{ __('About this event') }}
        </x-forms.label>
        <div wire:ignore>
            <textarea wire:ignore cols="30" id="editor" rows="10" wire:model='form.details' class="w-full py-3 text-base font-normal font-inter border border-slate-400 rounded" placeholder="Add description here.."></textarea>
        </div>
        <x-input-error :messages="$errors->get('form.details')" class="mt-2" />
    </div>
    <div class="mb-2">
        <x-forms.label for="form.image">
            {{__('Add Event photos')}}
        </x-forms.label>
        <div class="upload-container">
            <div id="drop-area" class="drag-area">
                <div class="w-full flex justify-center pb-1">
                    <div class="flex justify-center items-center w-[64px] h-[64px] rounded-full bg-primary-700">
                        <x-svg.upload />
                    </div>
                </div>
                <h3 class="text-title pb-1">Drug & Drop</h3>
                <p class="text-paragraph pb-1">or <span>Browse</span> your photos to upload</p>
                <p class="text-paragraph">Supported image format .JPEG, .PNG</p>
                <input wire:model="form.image" type="file" id="file-input" multiple accept="image/*" hidden />
            </div>
            <span class="text-paragraph">*Upload up to 10 photos (Recommended size: 1920x1080px,Max file size: 10MB each).</span>
            <div id="preview" class="preview-area"></div>
            <x-input-error :messages="$errors->get('form.image')" class="mt-2" />
        </div>
    </div>

    <div class="mb-2">
        <x-forms.label for="form.category">
            Organized By
        </x-forms.label>
        <x-forms.select-input wire.model="form.organizer">
            <option>Organized By</option>
            @foreach ($organizers as $each)
            <option value="{{ $each->id }}">{{ $each->name }}</option>
            @endforeach
        </x-forms.select-input>
        <x-input-error :messages="$errors->get('form.organizer')" class="mt-2" />
    </div>

    <div class="mb-2">
        <x-forms.label for="form.category">
            Event Category
        </x-forms.label>
        <x-forms.select-input wire.model="form.category">
            <option>Event Category</option>
            @foreach ($categories as $each)
            <option value="{{ $each->id }}">{{ $each->title }}</option>
            @endforeach
        </x-forms.select-input>
        <x-input-error :messages="$errors->get('form.category')" class="mt-2" />
    </div>

    <div class="mt-6">
        <x-buttons.primary>
            Save
        </x-buttons.primary>
    </div>
</form>