<section>
    <div class="mb-5">
        <div class="grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 sm:ml-20 md:ml-64 lg:ml-64">
            <div class="flex items-center">
                <button class="bg-primary-400 p-4 rounded-full">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.9835 2C6.17689 2.06395 4.53758 2.33111 3.41752 3.44729C2.43723 4.42418 2.10954 5.79744 2 8M15.0165 2C17.8231 2.06395 19.4624 2.33111 20.5825 3.44729C21.5628 4.42418 21.8905 5.79744 22 8M15.0165 22C17.8231 21.9361 19.4624 21.6689 20.5825 20.5527C21.5628 19.5758 21.8905 18.2026 22 16M8.9835 22C6.17689 21.9361 4.53758 21.6689 3.41752 20.5527C2.43723 19.5758 2.10954 18.2026 2 16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 15L17 17M16 11.5C16 9.01469 13.9853 7 11.5 7C9.01469 7 7 9.01469 7 11.5C7 13.9853 9.01469 16 11.5 16C13.9853 16 16 13.9853 16 11.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="line w-full bg-primary-400 h-[5px]"></div>
            </div>
            <div class="flex items-center">
                <button class="bg-primary-400 p-4 rounded-full">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.9835 2C6.17689 2.06395 4.53758 2.33111 3.41752 3.44729C2.43723 4.42418 2.10954 5.79744 2 8M15.0165 2C17.8231 2.06395 19.4624 2.33111 20.5825 3.44729C21.5628 4.42418 21.8905 5.79744 22 8M15.0165 22C17.8231 21.9361 19.4624 21.6689 20.5825 20.5527C21.5628 19.5758 21.8905 18.2026 22 16M8.9835 22C6.17689 21.9361 4.53758 21.6689 3.41752 20.5527C2.43723 19.5758 2.10954 18.2026 2 16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 15L17 17M16 11.5C16 9.01469 13.9853 7 11.5 7C9.01469 7 7 9.01469 7 11.5C7 13.9853 9.01469 16 11.5 16C13.9853 16 16 13.9853 16 11.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="line w-full bg-primary-400 h-[5px]"></div>
            </div>
            <div class="flex items-center">
                <button class="bg-primary-400 p-4 rounded-full">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.9835 2C6.17689 2.06395 4.53758 2.33111 3.41752 3.44729C2.43723 4.42418 2.10954 5.79744 2 8M15.0165 2C17.8231 2.06395 19.4624 2.33111 20.5825 3.44729C21.5628 4.42418 21.8905 5.79744 22 8M15.0165 22C17.8231 21.9361 19.4624 21.6689 20.5825 20.5527C21.5628 19.5758 21.8905 18.2026 22 16M8.9835 22C6.17689 21.9361 4.53758 21.6689 3.41752 20.5527C2.43723 19.5758 2.10954 18.2026 2 16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 15L17 17M16 11.5C16 9.01469 13.9853 7 11.5 7C9.01469 7 7 9.01469 7 11.5C7 13.9853 9.01469 16 11.5 16C13.9853 16 16 13.9853 16 11.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="p-5 rounded-lg shadow">
        <form wire:submit="save">
            <div class="p-2 mb-2">
                <h3 class="text-2xl font-inter font-medium">What is this event about?</h3>
                <p class="font-poppins text-base font-normal text-textSm-400">A concise and engaging description of your event. Use a clear and descriptive title that conveys the essence of your event.</p>
            </div>
            <div class="grid md:grid-cols-2 sm:grid-cols-1 sm:gap-1 md:gap-4">
                <div class="p-2 w-full">
                    <x-forms.label for="form.title" required='yes'>
                        {{ __('Event Title') }}
                    </x-forms.label>
                    <x-forms.text-input type="text" wire:model.live='form.title' />
                    <x-input-error :messages="$errors->get('form.title')" class="mt-2" />
                </div>

                <div class="p-2 w-full">
                    <x-forms.label for="form.description" required='yes'>
                        {{ __('Event Short Description') }}
                    </x-forms.label>
                    <x-forms.text-input wire:model.live="form.description" type="text" />
                    <x-input-error :messages="$errors->get('form.description')" class="mt-2" />
                </div>
            </div>

            <div class="p-2">
                <x-buttons.primary>
                    Add User
                </x-buttons.primary>
            </div>
        </form>
    </div>
</section>
