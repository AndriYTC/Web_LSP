<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-between mt-4">
            <div class="mt-3 ml-4">
                <!-- Tombol Kembali -->
                <div class="left-1 mr-4">
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-blue-900 dark:hover:text-white transition">
                        <!-- Icon Panah -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                        Kembali
                    </a>
                </div>
            </div>
            <div class="flex items-center">
                <x-primary-button>
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>

        </div>
    </form>
</x-guest-layout>
