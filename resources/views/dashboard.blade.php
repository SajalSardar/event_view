<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-3 mt-3">
                        <x-forms.text-input type="text" placeholder="ener your name" />
                    </div>
                    <div class="mb-4">
                        <x-forms.text-input type="email" placeholder="enter your email" class="pb-3" />
                    </div>
                    <div class="mb-3">
                        <x-forms.text-input type="date" class="pb-3" />
                    </div>
                    <x-forms.radio-input />

                    <x-forms.checkbox-input />

                    <div class="mb-3 mt-3">
                        <x-forms.select-input>
                            <option value="1">One</option>
                            <option value="1">Two</option>
                            <option value="1">Three</option>
                        </x-forms.select-input>
                    </div>

                    <x-buttons.primary>
                        {{ __('Save') }}
                    </x-buttons.primary>

                    <x-buttons.primary>
                        {{ __('Save And Continue') }}
                    </x-buttons.primary>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
