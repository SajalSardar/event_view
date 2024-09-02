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

                    <x-buttons.secondary>
                        {{ __('Add New') }}
                    </x-buttons.secondary>

                    <x-buttons.primary>
                        {{ __('Save') }}
                    </x-buttons.primary>

                    <x-buttons.primary>
                        {{ __('Save And Continue') }}
                    </x-buttons.primary>

                    <table class="w-full">
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Shah Alam</td>
                                <td>
                                    <x-actions.edit route="#" />
                                    <x-actions.delete />
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="mb-3">
                        <x-forms.text-input-icon type="number" wire:model.live="mobile" placeholder="Enter user mobile number">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5393 22.989C18.3103 22.989 22.9887 18.3106 22.9887 12.5395C22.9887 6.76846 18.3103 2.09009 12.5393 2.09009C6.76822 2.09009 2.08984 6.76846 2.08984 12.5395C2.08984 18.3106 6.76822 22.989 12.5393 22.989Z" stroke="#666666" stroke-width="1.5" />
                                <path d="M12.5393 8.35962V12.5394L14.6292 14.6293" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </x-forms.text-input-icon>
                    </div>

                    <div class="mb-3">
                        <x-forms.text-input-icon type="text" wire:model.live="schedule" placeholder="Enter user schedule time">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.8089 2.08984V4.17973M6.26953 2.08984V4.17973" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2.6123 12.7934C2.6123 8.2403 2.6123 5.96372 3.9207 4.54924C5.22909 3.13477 7.33492 3.13477 11.5466 3.13477H13.532C17.7436 3.13477 19.8495 3.13477 21.1579 4.54924C22.4662 5.96372 22.4662 8.2403 22.4662 12.7934V13.3301C22.4662 17.8832 22.4662 20.1597 21.1579 21.5743C19.8495 22.9887 17.7436 22.9887 13.532 22.9887H11.5466C7.33492 22.9887 5.22909 22.9887 3.9207 21.5743C2.6123 20.1597 2.6123 17.8832 2.6123 13.3301V12.7934Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.13477 8.35938H21.9438" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </x-forms.text-input-icon>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
