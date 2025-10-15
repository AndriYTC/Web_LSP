<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 text-green-500">{{ session('success') }}</div>
                @endif

                <table class="w-full border-collapse">
                    <thead>
                        <tr class="border-b border-gray-600 dark:text-blue-300 text-blue-200 text-left">
                            <th class="p-2">#</th>
                            <th class="p-2">Name</th>
                            <th class="p-2">Email</th>
                            <th class="p-2">Role</th>
                            <th class="p-2">Registered</th>
                            <th class="p-2 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-b border-gray-700 dark:text-gray-200">
                                <td class="p-2">{{ $loop->iteration }}</td>
                                <td class="p-2">{{ $user->name }}</td>
                                <td class="p-2">{{ $user->email }}</td>
                                <td class="p-2">{{ ucfirst($user->role) }}</td>
                                <td class="p-2">{{ $user->created_at->format('d M Y') }}</td>
                                <td class="p-2 text-center">
                                    <a href="{{ route('users.edit', $user) }}" class="text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Delete this user?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
