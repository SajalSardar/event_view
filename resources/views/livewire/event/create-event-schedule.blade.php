<div class="grid lg:grid-cols-7 ml-6 lg:gap-6">
    <div class="col-span-1 mt-24">
        <div class="p-3 border border-line-base text-paragraph rounded mb-3">What is this event about?</div>
        <div class="p-3 border border-primary-400 bg-primary-700 text-paragraph rounded mb-3">When And Where This Event Is Happening?</div>
        <div class="p-3 border border-line-base text-paragraph rounded mb-3">Add More to Your Event</div>
        <div class="p-3 border border-line-base text-paragraph rounded mb-3">When And Where This Event Is Happening?</div>
    </div>

    <div class="col-span-6">
        <form wire:submit="store">
            @include('livewire.event.partials.step')
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 mt-8 gap-4">

                <div class="border border-base-500 p-6 rounded">
                    <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 sm:gap-1 md:gap-2">
                        <div class="lg:col-span-2">
                            <div class="w-full">
                                <x-forms.label for="form.date" required="yes">
                                    {{__('Date and time')}}
                                </x-forms.label>
                                <x-forms.text-input-icon wire.model="form.date" type="text" dir="end">
                                    <x-svg.calender />
                                </x-forms.text-input-icon>
                                <x-input-error :messages="$errors->get('form.date')" class="mt-2" />
                            </div>
                        </div>
                        <div class="lg:col-span-1">
                            <div class="w-full">
                                <x-forms.label style="opacity: 0;" for="form.start_date" required="yes">
                                    {{__('Date and time')}}
                                </x-forms.label>
                                <x-forms.text-input-icon placeholder="Start time" wire.model="form.start_date" type="text" dir="end">
                                    <x-svg.clock />
                                </x-forms.text-input-icon>
                                <x-input-error :messages="$errors->get('form.start_date')" class="mt-2" />
                            </div>
                        </div>
                        <div class="lg:col-span-1">
                            <div class="w-full">
                                <x-forms.label style="opacity: 0;" for="form.end_date" required="yes">
                                    {{__('Date and time')}}
                                </x-forms.label>
                                <x-forms.text-input-icon placeholder="End time" wire.model="form.end_date" type="text" dir="end">
                                    <x-svg.clock />
                                </x-forms.text-input-icon>
                                <x-input-error :messages="$errors->get('form.end_date')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 sm:gap-1 md:gap-2 mt-2">
                        <div class="w-full">
                            <x-forms.label for="form.location" required="yes">
                                {{__('Location')}}
                            </x-forms.label>
                            <x-forms.text-input-icon wire.model="form.location" type="text" dir="end">
                                <x-svg.map />
                            </x-forms.text-input-icon>
                            <x-input-error :messages="$errors->get('form.location')" class="mt-2" />
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-1 lg:gap-6 md:gap-6 sm:gap-4 mt-2">
                        <div class="col-span-2">
                            <x-forms.text-input-icon placeholder="Street" wire.model="form.street" type="text" dir="end" />
                            <x-input-error :messages="$errors->get('form.street')" class="mt-2" />
                        </div>
                        <div>
                            <x-forms.text-input-icon placeholder="City" wire.model="form.city" type="text" dir="end" />
                            <x-input-error :messages="$errors->get('form.city')" class="mt-2" />
                        </div>
                        <div>
                            <x-forms.text-input-icon placeholder="State" wire.model="form.state" type="text" dir="end" />
                            <x-input-error :messages="$errors->get('form.state')" class="mt-2" />
                        </div>
                        <div>
                            <x-forms.text-input-icon placeholder="Zip" wire.model="form.zip" type="text" dir="end" />
                            <x-input-error :messages="$errors->get('form.zip')" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 lg:gap-2 md:gap-2 sm:gap-4 mt-2">
                        <x-buttons.primary style="width:150px" class="!bg-primary-700 !text-primary-400 !text-paragraph">
                            Show Map
                        </x-buttons.primary>
                        <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29189.78740387627!2d90.00358355!3d23.86395295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755f603f1698647%3A0x894c2f1900643eb6!2sManikganj!5e0!3m2!1sen!2sbd!4v1732450190010!5m2!1sen!2sbd" height="311" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="pt-6">
                        <x-buttons.primary>
                            Save & Next
                        </x-buttons.primary>
                    </div>
                </div>

                <div>data</div>
            </div>
        </form>
    </div>
</div>