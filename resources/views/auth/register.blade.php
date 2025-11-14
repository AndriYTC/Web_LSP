<x-guest-layout>

    <div class="bg-white/45 backdrop-blur-sm border border-white/20 shadow-2xl rounded-xl p-6">

        <h2 class="text-2xl font-bold text-center mb-6 text-gray-900">Daftar Akun LSP</h2>

        <!-- STATUS -->
        <x-auth-session-status class="mb-4 text-center !text-gray-900" :status="session('status')" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nama Lengkap -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Nama Lengkap')" class="!text-gray-900" />
                <input id="name" type="text" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5"
                    placeholder="Masukkan nama lengkap" value="{{ old('name') }}" autofocus>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Username / Email -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Nama Pengguna / Email')" class="!text-gray-900" />
                <input id="email" type="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5"
                    placeholder="Masukkan email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Kata Sandi')" class="!text-gray-900" />
                <input id="password" type="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5"
                    placeholder="Masukkan kata sandi">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')"
                    class="!text-gray-900" />
                <input id="password_confirmation" type="password" name="password_confirmation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5"
                    placeholder="Ulangi kata sandi">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full text-white bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-blue-800">
                Daftar
            </button>

            <!-- Back -->
            <a href="{{ url('login') }}" class="mt-3 block text-center text-sm text-gray-700 hover:text-gray-900">
                Sudah punya akun? Masuk
            </a>

        </form>

    </div>

</x-guest-layout>
