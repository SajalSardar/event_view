<div class="p-5 rounded-lg shadow-lg">
    <header class="py-5 px-2">
        <h3 class="font-bold text-xl">Create Users By Admin</h3>
        <p>Please fill the input field where sign <span class="text-red-500">(*) </span> have.</p>
    </header>
    <hr>

    <section class="py-5">
        <form action="#">
            <div class="flex justify-between">
                <div class="p-2 w-full">
                    <x-forms.label for="name" required='yes'>
                        {{ __('User Name') }}
                    </x-forms.label>
                    <x-forms.text-input type="text" placeholder="User name" />
                </div>

                <div class="p-2 w-full">
                    <x-forms.label for="email" required='yes'>
                        {{ __('User Email') }}
                    </x-forms.label>
                    <x-forms.text-input type="email" placeholader="Enter user email" />
                </div>
            </div>

            <div class="flex justify-between">
                <div class="p-2 w-full">
                    <x-forms.label for="password" required='yes'>
                        {{ __('User password') }}
                    </x-forms.label>
                    <x-forms.text-input type="password" placeholader="Enter user password" />
                </div>

                <div class="p-2 w-full">
                    <x-forms.label for="role" required='yes'>
                        {{ __('User Role') }}
                    </x-forms.label>
                    
                    <x-forms.select-input>
                        <option selected disabled>--User Role--</option>
                        @forelse ($roles as $role)
                            <option value="{{ $role?->id }}">{{ $role?->name }}</option>
                        @empty
                            <option disabled>--No Roles Found--</option>
                        @endforelse
                        </x-forms-select-input>
                </div>
            </div>

            <div class="p-2">
                <x-buttons.primary>
                    Save Event
                </x-buttons.primary>
            </div>

        </form>
    </section>
</div>
