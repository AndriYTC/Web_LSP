<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profil Pribadi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Card Profil Utama --}}
            <div
                class="bg-gray-800 from-blue-50 to-indigo-100 dark:from-gray-800 dark:to-gray-900 rounded-2xl shadow-xl overflow-hidden">
                <div class="p-8">
                    {{-- Header Card --}}
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Profil Saya</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">Kelola informasi profil Anda</p>
                        </div>
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                            <span
                                class="text-white text-xl font-bold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                        </div>
                    </div>

                    {{-- Informasi Pribadi --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Card Nama --}}
                        <div
                            class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="w-10 h-10 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Nama Lengkap</h3>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 text-lg font-medium">{{ Auth::user()->name }}</p>
                        </div>

                        {{-- Card Email --}}
                        <div
                            class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="w-10 h-10 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Alamat Email</h3>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 text-lg font-medium">{{ Auth::user()->email }}
                            </p>
                        </div>
                    </div>

                    {{-- Statistik Tambahan --}}
                    <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">0</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Proyek</div>
                        </div>
                        <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                            <div class="text-2xl font-bold text-green-600 dark:text-green-400">0</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Tugas</div>
                        </div>
                        <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                            <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">0</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Aktivitas</div>
                        </div>
                        <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                            <div class="text-2xl font-bold text-orange-600 dark:text-orange-400">0</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Pencapaian</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Notifikasi Error --}}
            @if (session('error'))
                <div class="mt-8">
                    <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-red-800 dark:text-red-400">Akses Ditolak</h3>
                                <p class="text-red-700 dark:text-red-300 mt-1">{{ session('error') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
