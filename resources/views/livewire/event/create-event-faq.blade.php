<div class="grid lg:grid-cols-7 ml-6 lg:gap-6">
    <div class="col-span-1 mt-24">
        <div class="p-3 border border-line-base text-paragraph rounded mb-3">What is this event about?</div>
        <div class="p-3 border border-line-base text-paragraph rounded mb-3">When And Where This Event Is Happening?</div>
        <a href="{{ route('admin.event.agenda.create', ['event' => $event->id]) }}">
            <div class="p-3 border border-line-base text-paragraph rounded mb-3">Add Agenda to Your Event</div>
        </a>
        <a href="{{ route('admin.event.faq.create', ['event' => $event->id]) }}">
            <div class="p-3 border border-primary-400 bg-primary-700 text-paragraph rounded mb-3">When And Where This Event Is Happening?</div>
        </a>
    </div>

    <div class="col-span-6">
        <form wire:submit.prevent="store">
            @include('livewire.event.partials.step')

            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 mt-8 gap-4">
                <div class="border border-base-500 p-6 rounded">
                    <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 sm:gap-1 md:gap-2 mt-2">
                        <div class="w-full">
                            <x-forms.label for="form.question" required="yes">
                                {{ __('Question') }}
                            </x-forms.label>
                            <x-forms.text-input wire:model="form.question" />
                            <x-input-error :messages="$errors->get('form.question')" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 sm:gap-1 md:gap-2 mt-2">
                        <div class="w-full">
                            <x-forms.label for="form.answer" required="yes">
                                {{ __('Answer') }}
                            </x-forms.label>
                            <div wire:ignore>
                                <textarea wire:ignore cols="30" id="editor" rows="10" wire:model.live='form.answer' class="w-full py-3 text-base font-normal font-inter border border-slate-400 rounded" placeholder="Add answer here.."></textarea>
                            </div>
                            <x-input-error :messages="$errors->get('form.answer')" class="mt-2" />
                        </div>
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
                        @foreach ($event->schedules as $each)
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

                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Slot</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Location</th>
                        </thead>
                        @foreach ($event->agendas as $each)
                        <tr>
                            <td>{{ $each->id }}</td>
                            <td>{{ $each->topic }}</td>
                            <td>{{ $each->description }}</td>
                            <td>{{ $each->start }}</td>
                            <td>{{ $each->end }}</td>
                            <td><img src="{{ $each?->image?->url }}" alt="#" width="50px" height="50px" style="border-radius: 50%;"></td>
                        </tr>
                        @endforeach
                    </table>

                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Question</th>
                            <th>Anser</th>
                        </thead>
                        @foreach ($event->faqs as $each)
                        <tr>
                            <td>{{ $each->id }}</td>
                            <td>{{ $each->question }}</td>
                            <td>{{ $each->answer }}</td>
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
    const editor = ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('form.answer', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush