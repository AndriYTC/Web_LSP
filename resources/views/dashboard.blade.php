<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profil Pribadi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:rounded-2xl sm:px-4 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 flex items-center gap-6">


                {{-- Informasi Pribadi --}}
                <div class="text-gray-900 dark:text-gray-100 flex flex-col justify-center gap-2">
                    <div>
                        <span class="font-semibold">Nama:</span>
                        <p>{{ Auth::user()->name }}</p>
                    </div>
                    <div>
                        <span class="font-semibold">Email:</span>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                </div>

            </div>

            {{-- Notifikasi error --}}
            @if (session('error'))
                <div class="flex items-center justify-center mt-6">
                    <div class="flex items-start gap-3 bg-red-700 border text-white p-4 rounded-xl max-w-md w-fit h-max">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-red-500 flex-shrink-0 mt-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M12 2a10 10 0 110 20 10 10 0 010-20z" />
                        </svg>

                        <div>
                            <h3 class="text-xl font-bold text-white">Akses Ditolak</h3>
                            <p class="text-base text-white">{{ session('error') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
