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


                                    @if($user->role !== 'developers')
                                        <a href="{{ route('users.edit', $user) }}"
                                        class="text-blue-500 hover:underline">Edit</a>
                                        <button type="button" class="text-red-500 hover:underline"
                                            onclick="openDeleteModal({{ $user->id }}, '{{ $user->name }}')">
                                            Delete
                                        </button>

                                        <!-- Hidden form untuk submit -->
                                        <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user) }}"
                                            method="POST" class="hidden">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @else
                                        <span class="text-gray-400 italic">Protected</span>
                                    @endif
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

    <!-- Modal Delete -->
    <div id="deleteModal" class="fixed inset-0 z-50 hidden">
        <!-- Overlay yang gelap tapi tidak menghalangi klik di belakang -->
        <div class="fixed inset-0 bg-black opacity-50 pointer-events-none"></div>

        <!-- Modal content -->
        <div class="flex items-center justify-center min-h-screen px-4 relative z-10">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-full max-w-md">
                <div class="p-6 text-center">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-gray-200" id="modalUserName">Hapus User</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">Apakah Anda yakin ingin menghapus user ini?</p>
                    <div class="mt-4 flex justify-center gap-4">
                        <button onclick="closeDeleteModal()"
                            class="px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded">Batal</button>
                        <button id="confirmDeleteBtn" class="px-4 py-2 bg-red-600 text-white rounded">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentUserId = null;

        function openDeleteModal(userId, userName) {
            currentUserId = userId;
            document.getElementById('modalUserName').innerText = `Hapus User: ${userName}`;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            currentUserId = null;
            document.getElementById('deleteModal').classList.add('hidden');
        }

        document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
            if (currentUserId) {
                document.getElementById('delete-form-' + currentUserId).submit();
            }
        });
    </script>
</x-app-layout>
