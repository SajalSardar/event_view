<div class="grid lg:grid-cols-7 ml-6 lg:gap-6">
    <div class="col-span-1 mt-24">
        <div class="p-3 border border-line-base text-paragraph rounded mb-3">What is this event about?</div>
        <div class="p-3 border border-primary-400 bg-primary-700 text-paragraph rounded mb-3">When And Where This Event Is Happening?</div>
        <div class="p-3 border border-line-base text-paragraph rounded mb-3">Add More to Your Event</div>
        <div class="p-3 border border-line-base text-paragraph rounded mb-3">When And Where This Event Is Happening?</div>
    </div>

    <div class="col-span-6">
        <form wire:submit.prevent="store">
            @include('livewire.event.partials.step')

            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 mt-8 gap-4">
                <div class="border border-base-500 p-6 rounded">
                    <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 sm:gap-1 md:gap-2">
                        <x-forms.label for="slot" required="yes">
                            {{ __('Slot') }}
                        </x-forms.label>
                        <x-forms.text-input id="slot"  placeholder="Enter slot name" wire:model="slot" type="text" dir="end" />
                        <x-input-error :messages="$errors->get('slot')" class="mt-2" />
                    </div>
                    <!-- Date and Time Section -->
                    <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 sm:gap-1 md:gap-2 mt-2">
                        <div class="lg:col-span-2">
                            <x-forms.label for="date" required="yes">
                                {{ __('Date and time') }}
                            </x-forms.label>
                            <x-forms.text-input-icon id="date" placeholder="Enter Date" wire:model="date" type="text" dir="end">
                                <x-svg.calender />
                            </x-forms.text-input-icon>
                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                        </div>
                        <div class="lg:col-span-1">
                            <x-forms.label style="opacity: 0;" for="startTime" required="yes">
                                {{ __('Start time') }}
                            </x-forms.label>
                            <x-forms.text-input-icon id="startTime" placeholder="Start time" wire:model="startTime" type="text" dir="end">
                                <x-svg.clock />
                            </x-forms.text-input-icon>
                            <x-input-error :messages="$errors->get('startTime')" class="mt-2" />
                        </div>
                        <div class="lg:col-span-1">
                            <x-forms.label style="opacity: 0;" for="endTime" required="yes">
                                {{ __('End time') }}
                            </x-forms.label>
                            <x-forms.text-input-icon id="endTime" placeholder="End time" wire:model="endTime" type="text" dir="end">
                                <x-svg.clock />
                            </x-forms.text-input-icon>
                            <x-input-error :messages="$errors->get('endTime')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Location Section -->
                    <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 sm:gap-1 md:gap-2 mt-2">
                        <x-forms.label for="location" required="yes">
                            {{ __('Location') }}
                        </x-forms.label>
                        <x-forms.text-input-icon id="location" wire:model="location" type="text" dir="end">
                            <x-svg.map />
                        </x-forms.text-input-icon>
                        <x-input-error :messages="$errors->get('location')" class="mt-2" />
                    </div>
                    <div class="grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-1 lg:gap-6 md:gap-6 sm:gap-4 mt-2">
                        <div class="col-span-2">
                            <x-forms.text-input-icon id="street" placeholder="Street" wire:model="street" type="text" dir="end" />
                            <x-input-error :messages="$errors->get('street')" class="mt-2" />
                        </div>
                        <div>
                            <x-forms.text-input-icon id="city" placeholder="City" wire:model="city" type="text" dir="end" />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>
                        <div>
                            <x-forms.text-input-icon id="state" placeholder="State" wire:model="state" type="text" dir="end" />
                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                        </div>
                        <div>
                            <x-forms.text-input-icon id="zip" placeholder="Zip" wire:model="zip" type="text" dir="end" />
                            <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Show Map Section -->
                    <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 lg:gap-2 md:gap-2 sm:gap-4 mt-2">
                        <x-buttons.primary style="width:150px" class="!bg-primary-700 !text-primary-400 !text-paragraph">
                            Show Map
                        </x-buttons.primary>
                        <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29189.78740387627!2d90.00358355!3d23.86395295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755f603f1698647%3A0x894c2f1900643eb6!2sManikganj!5e0!3m2!1sen!2sbd!4v1732450190010!5m2!1sen!2sbd" height="311" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- Save and Next Button -->
                    <div class="pt-6">
                        <x-buttons.primary>
                            Save
                        </x-buttons.primary>
                        <x-buttons.primary type="button" wire:click="next">
                            Save & Next
                        </x-buttons.primary>
                    </div>
                </div>

                <!-- Event Details Section -->
                <div>
                    <p>Event Name : {{ $event?->title }}</p>
                    <p>Event Details : {!! $event?->details !!}</p>
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Slot</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Location</th>
                        </thead>
                        @foreach ($schedules as $each)
                        <tr>
                            <td>{{ $each->id }}</td>
                            <td>{{ $each->slot }}</td>
                            <td>{{ $each->date }}</td>
                            <td>{{ $each->start }}</td>
                            <td>{{ $each->end }}</td>
                            <td>{{ $each->location }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>

@push('script')
<script>
    flatpickr("#date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });
    flatpickr("#startTime", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        minTime: "00:00",
        maxTime: "23:00",
    });
    flatpickr("#endTime", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        minTime: "00:00",
        maxTime: "23:00",
    });
</script>
@endpush