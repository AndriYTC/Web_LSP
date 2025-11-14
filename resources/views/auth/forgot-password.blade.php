<x-guest-layout>

    <div class="bg-white/45 backdrop-blur-sm border border-white/20 shadow-2xl rounded-xl p-6">

        <h2 class="text-2xl font-bold text-center mb-6 text-gray-900">Reset Kata Sandi</h2>

        <div class="mb-4 text-sm text-gray-900 text-center">
            Lupa kata sandi? Tidak masalah. Masukkan alamat email Anda dan kami akan mengirim tautan reset sandi.
        </div>
        <x-auth-session-status class="mb-4 text-center !text-gray-900" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="!text-gray-900" />
                <input id="email" type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                           focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5"
                    placeholder="Masukkan email Anda" value="{{ old('email') }}" autofocus>
                <x-input-error :messages="$errors->get('email')" class="mt-2 !text-gray-900" />
            </div>

            <button type="submit" class="w-full text-white bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5
                       text-center hover:bg-blue-800">
                Kirim Tautan Reset
            </button>

            <a href="{{ url('/') }}" class="mt-3 block text-center text-sm text-gray-700 hover:text-gray-900">
                Kembali
            </a>
        </form>

        <div class="text-center mt-6">
            <p class="text-gray-700">
                Sudah ingat kata sandi?
                <a href="{{ url('login') }}" class="text-blue-600 hover:underline">
                    Masuk
                </a>
            </p>
            <p class="text-gray-700">
                Belum punya akun?
                <a href="{{ url('register') }}" class="text-blue-600 hover:underline">
                    Daftar Sekarang
                </a>
            </p>
        </div>

    </div>

</x-guest-layout>
