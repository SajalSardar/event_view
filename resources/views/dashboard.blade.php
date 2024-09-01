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
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <x-forms.text-input type="text" placeholder="ener your name" />
            <x-forms.text-input type="email" placeholder="enter your email" />
            <x-forms.text-input type="date" />
            <x-forms.radio-input />
            <x-forms.checkbox-input name="fruits" />
            <x-forms.select-input />
            <x-buttons.primary>
                {{ __('Save') }}
            </x-buttons.primary>
            <x-buttons.primary>
                {{ __('Save And Continue') }}
            </x-buttons.primary>
        </div>

    </div>
</x-app-layout>
