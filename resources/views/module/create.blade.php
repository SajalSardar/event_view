<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Module') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('dashboard.module.store') }}">
                        @csrf

                        <!-- name Address -->
                        <div>
                            <x-input-label for="module_name" :value="__('Name')" />
                            <x-text-input id="module_name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="user" :value="__('Guard Name')" />
                            <select name="guard" class="block mt-1 w-full">
                                <option value="web" selected>Web</option>
                                <option value="admin">Admin</option>
                                <option value="organizer">Organizer</option>
                                <option value="attendee">Attendee</option>
                            </select>


                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
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
</x-app-layout>