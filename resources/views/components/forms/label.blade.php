<label {!! $attributes->merge(['class' => 'font-poppins text-base font-normal text-textSm-400 pb-1 block']) !!}>
    {{ $slot }}
    <span class="text-red-500">
        @if ($required == 'yes')
            *
        @endif
    </span>
</label>