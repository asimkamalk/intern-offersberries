@extends('layouts.app') {{-- Adjust if you're using a different layout --}}

@section('content')
    <h2 class="text-2xl font-bold text-center my-6 text-indigo-800">All Accounts</h2>

    <div class="flex justify-center">
        <div class="w-full max-w-5xl overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg border border-gray-200">
                <thead class="bg-gray-100 text-gray-700 text-left">
                    <tr>
                        <th class="px-6 py-3 border-b">ID</th>
                        <th class="px-6 py-3 border-b">Name</th>
                        <th class="px-6 py-3 border-b">Email</th>
                        <th class="px-6 py-3 border-b">Phone</th>
                        <th class="px-6 py-3 border-b">Role</th>
                        <th class="px-6 py-3 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($allAccounts as $account)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 border-b">{{ $account->id }}</td>
                            <td class="px-6 py-4 border-b">{{ $account->name }}</td>
                            <td class="px-6 py-4 border-b">{{ $account->email }}</td>
                            <td class="px-6 py-4 border-b">{{ $account->phone }}</td>
                            <td class="px-6 py-4 border-b">{{ ucfirst($account->role) }}</td>
                            <td class="px-6 py-4 border-b">
                                <a href="{{ route('account.show', $account->id) }}"
                                    class="text-blue-600 hover:underline">View</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">No accounts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection