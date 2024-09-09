<x-app-layout>
    <table class="w-full table-fixed">
        <thead class="w-full bg-slate-100 mb-5">
            <tr>
                <th class="text-start ps-10 py-2">User Name</th>
                <th class="text-start ps-10 py-2">Email</th>
                <th class="text-start ps-10 py-2">Email Verified</th>
                <th class="text-start ps-10 py-2">Role</th>
            </tr>
        </thead>

        <tbody class="mt-5">
            @forelse ($collections as $each)
                <tr class="rounded shadow">
                    <td class="p-10 flex">
                        <div class="profile">
                            <img src="{{ asset('assets/images/user.png') }}" alt="user_picture">
                        </div>
                        <div class="infos ps-5">
                            <h5 class="font-medium text-slate-900">{{ $each?->name }}</h5>
                        </div>
                    </td>
                    <td class="p-10 font-normal text-gray-400">{!! Helper::status(0) !!}</td>
                    <td class="p-10 font-normal text-gray-400">{{ Helper::ISOdate($each?->created_at) }}</td>
                    <td class="p-10 font-normal text-gray-400">{{ $each?->roles->first()->name }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        <h5 class="font-medium text-slate-900">No data found !!!</h5>
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>

</x-app-layout>
