<x-guest-layout>

    <div class="bg-white/45 backdrop-blur-sm border border-white/20 shadow-2xl rounded-xl p-6">

        <h2 class="text-2xl font-bold text-center mb-6 text-gray-900">Login Akun LSP</h2>

        <!-- STATUS -->
        <x-auth-session-status class="mb-4 text-center !text-gray-900" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Username -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Nama Pengguna / Email')" class="!text-gray-900"/>
                <input id="email" type="text" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5"
                    placeholder="Masukkan nama pengguna" value="{{ old('email') }}" autofocus>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Kata Sandi')" class="!text-gray-900"/>
                <input id="password" type="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5"
                    placeholder="Masukkan kata sandi">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox" name="remember"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500">
                <label for="remember_me" class="ml-2 text-sm text-gray-800">Ingat saya</label>
            </div>

            <!-- Tombol Login -->
            <button type="submit"
                class="w-full text-white bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-blue-800">
                Masuk
            </button>

            <!-- Tombol Kembali -->
            <a href="{{ url('/') }}" class="mt-3 block text-center text-sm text-gray-700 hover:text-gray-900">
                Kembali
            </a>
        </form>

        <!-- Footer -->
        <div class="text-center mt-6">
            <p class="text-gray-700">
                Belum punya akun?
                <a href="{{ url('register') }}" class="text-blue-600 hover:underline">
                    Daftar Sekarang
                </a>
            </p>
            <p class="text-gray-700">
                Lupa sandi?
                <a href="{{ url('forgot-password') }}" class="text-blue-600 hover:underline">
                    Reset sandi
                </a>
            </p>
        </div>

    </div>

</x-guest-layout>
