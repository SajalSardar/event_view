<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('dashboard.role.create') }}">Add Role</a>

                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">Id</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">Role</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">Action</th>
                            </tr>
                        <tbody class="divide-y divide-gray-200">
                            @forelse ($roles as $role)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $role->id }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $role->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        <a href="{{ route('dashboard.role.edit', $role->id) }}">edit</a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
