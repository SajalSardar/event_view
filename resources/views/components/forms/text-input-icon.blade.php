<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<div class="relative">
    <input {!! $attributes->merge(['class' => 'w-full py-3 border border-slate-400 focus:border-primary-400 rounded-lg bg-transparent']) !!} />
    <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
        <button type="button" class="text-gray-600 hover:text-gray-700">
            {{ $slot }}
        </button>
    </span>
</div>
