<div class="relative">
    <input type="{{ $type }}" {!! $attributes->merge(['class' => 'w-full h-[40px] ps-10 border border-line-base focus:border-primary-400 rounded-lg bg-transparent text-paragraph']) !!} />
    <span class="absolute inset-y-0 {{ $dir }}-0 grid w-10 place-content-center">
        <button type="button" class="text-gray-600 hover:text-gray-700">
            {{ $slot }}
        </button>
    </span>
</div>