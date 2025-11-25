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

                <div class="relative">
                    <input id="password" type="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5 pr-10"
                        placeholder="Masukkan kata sandi">

                    <!-- Ikon Mata (tunggal untuk dua field) -->
                    <button type="button" onclick="toggleBothPasswords()"
                        class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600 hover:text-gray-900">

                        <!-- Mata Open -->
                        <svg id="oneEyeOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12s3.75-7.5 9.75-7.5 9.75 7.5 9.75 7.5-3.75 7.5-9.75 7.5S2.25 12 2.25 12z" />
                            <circle cx="12" cy="12" r="3" stroke-width="1.8" />
                        </svg>

                        <!-- Mata Close -->
                        <svg id="oneEyeClose" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3l18 18M9.88 9.88A3 3 0 0114.12 14.12M6.23 6.23C3.93 8.04 2.25 12 2.25 12s3.75 7.5 9.75 7.5c1.76 0 3.35-.44 4.75-1.12M17.77 17.77c2.3-1.82 4-5.77 4-5.77s-3.75-7.5-9.75-7.5c-.85 0-1.67.1-2.47.27" />
                        </svg>

                    </button>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" class="!text-gray-900" />

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

<script>
    function toggleBothPasswords() {
        const pass1 = document.getElementById('password');
        const pass2 = document.getElementById('password_confirmation');

        const eyeOpen = document.getElementById('oneEyeOpen');
        const eyeClose = document.getElementById('oneEyeClose');

        const isHidden = pass1.type === "password";

        // Toggle kedua input
        pass1.type = isHidden ? "text" : "password";
        pass2.type = isHidden ? "text" : "password";

        // Toggle icon
        eyeOpen.classList.toggle("hidden", isHidden);
        eyeClose.classList.toggle("hidden", !isHidden);
    }
</script>
