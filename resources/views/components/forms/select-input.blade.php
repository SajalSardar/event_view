<select {!! $attributes->merge(['class' => 'w-full py-2 border border-line-base text-paragraph focus:border-primary-400 rounded bg-transparent']) !!}>
    {{ $slot }}
</select>