<x-app-layout>

    <header class="flex justify-between mb-5">
        <h4>{{ __('Create Menu') }}</h4>
    </header>

    <livewire:menu.create-menu :roles="$roles" :parent_menus="$parent_menus" />
</x-app-layout>
