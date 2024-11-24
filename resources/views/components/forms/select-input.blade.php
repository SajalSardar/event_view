<select {!! $attributes->merge(['class' => 'w-full h-[40px] border border-line-base text-paragraph focus:border-primary-400 rounded bg-transparent']) !!}>
    {{ $slot }}
</select>