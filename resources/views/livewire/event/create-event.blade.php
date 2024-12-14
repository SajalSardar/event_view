<div class="pl-6">
    @include('livewire.event.partials.step')
    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 mt-8">
        <div class="border border-line-base rounded p-8">
            <div class="mb-5">
                <div class="flex justify-between items-center">
                    <h3 class="text-title pb-1">What is this event about?</h3>
                    <x-svg.down-arrow />
                </div>
                <p class="text-paragraph">A concise and engaging description of your event. Use a clear and descriptive title that conveys the essence of your event.</p>
            </div>
            @include('livewire.event.partials.forms.basic')
        </div>
    </div>

</div>

@push('script')
<script>
    const editor = ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('form.details', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let tabs = document.querySelectorAll('.tab');
        let contents = document.querySelectorAll('.tab-content');

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function(e) {
                let targetId = tab.id.replace('Tab', 'Content');

                contents.forEach(function(content) {
                    content.classList.add('hidden');
                });

                tabs.forEach(function(tab) {
                    tab.classList.remove('text-primary-400', 'text-paragraph', 'bg-gray-50', 'border-primary-400');
                    tab.classList.add('text-gray-600', 'text-paragraph');
                });

                document.getElementById(targetId).classList.remove('hidden');
                tab.classList.add('text-primary-400', 'text-paragraph', 'bg-gray-50', 'border-primary-400');
                tab.classList.remove('text-gray-600', 'text-paragraph');
            });
        });
    });
</script>
@endpush