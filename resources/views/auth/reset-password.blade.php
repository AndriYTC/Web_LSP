<x-guest-layout>

    <div class="bg-white/40 backdrop-blur-sm border border-white/20 shadow-2xl rounded-xl p-6">

        <h2 class="text-2xl font-bold text-center mb-6 text-gray-900">Reset Kata Sandi</h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="!text-gray-900" />
                <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required
                    autofocus autocomplete="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5" />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Kata Sandi Baru')" class="!text-gray-900" />
                <input id="password" type="password" name="password" required autocomplete="new-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')"
                    class="!text-gray-900" />
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Tombol -->
            <button type="submit" class="w-full text-white bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5
                text-center hover:bg-blue-800">
                Reset Kata Sandi
            </button>

            <!-- Kembali -->
            <a href="{{ url('/') }}" class="mt-3 block text-center text-sm text-gray-700 hover:text-gray-900">
                Kembali
            </a>

        </form>

    </div>

</x-guest-layout>
