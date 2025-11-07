<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        @if (session('error'))
            <div class="flex items-center justify-center mt-6">
                <div
                    class="flex items-start gap-3 bg-red-700 border text-white p-4 rounded-xl max-w-md w-fit h-max">
                    <!-- Ikon alert -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-red-500 flex-shrink-0 mt-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M12 2a10 10 0 110 20 10 10 0 010-20z" />
                    </svg>

                    <!-- Pesan error -->
                    <div>
                        <h3 class="text-xl font-bold text-white">Akses Ditolak</h3>
                        <p class="text-base text-white">{{ session('error') }}</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
