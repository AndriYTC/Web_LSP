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
                <x-input-label for="password" :value="__('Kata Sandi')" class="!text-gray-900" />

                <div class="relative">
                    <input id="password" type="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-1 p-2.5 pr-10"
                        placeholder="Masukkan kata sandi">

                    <!-- Tombol Show/Hide -->
                    <button type="button" onclick="togglePassword()"
                        class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600 hover:text-gray-900">

                        <!-- Mata Premium Open -->
                        <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12s3.75-7.5 9.75-7.5 9.75 7.5 9.75 7.5-3.75 7.5-9.75 7.5S2.25 12 2.25 12z" />
                            <circle cx="12" cy="12" r="3" stroke-width="1.8" />
                        </svg>

                        <!-- Mata Premium Closed -->
                        <svg id="eyeClose" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3l18 18M9.88 9.88A3 3 0 0114.12 14.12M6.23 6.23C3.93 8.04 2.25 12 2.25 12s3.75 7.5 9.75 7.5c1.76 0 3.35-.44 4.75-1.12M17.77 17.77c2.3-1.82 4-5.77 4-5.77s-3.75-7.5-9.75-7.5c-.85 0-1.67.1-2.47.27" />
                        </svg>

                    </button>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <script>
                function togglePassword() {
                    const input = document.getElementById('password');
                    const open = document.getElementById('eyeOpen');
                    const close = document.getElementById('eyeClose');

                    if (input.type === "password") {
                        input.type = "text";
                        open.classList.add("hidden");
                        close.classList.remove("hidden");
                    } else {
                        input.type = "password";
                        close.classList.add("hidden");
                        open.classList.remove("hidden");
                    }
                }
            </script>


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
