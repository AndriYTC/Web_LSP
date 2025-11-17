<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Lembaga Sertifikasi Profesi - Meningkatkan kompetensi profesional melalui sertifikasi berkualitas">
    <meta name="keywords" content="LSP, Sertifikasi Profesi, Kompetensi, Pelatihan">
    <meta name="author" content="LSP Indonesia">
    <title>LSP - Lembaga Sertifikasi Profesi</title>
    @vite('resources/css/home.css')
    <link rel="icon" href="https://public-frontend-cos.metadl.com/mgx/img/favicon.png" type="image/png">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <div class="logo">
                <span class="logo-text">LSP</span>
            </div>

            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link">Beranda</a></li>
                <li><a href="#about" class="nav-link">Tentang</a></li>
                <li><a href="#certifications" class="nav-link">Sertifikasi</a></li>
                <li><a href="#process" class="nav-link">Proses</a></li>
                <li><a href="#contact" class="nav-link">Kontak</a></li>

                <!-- LOGIN / DROPDOWN -->
                @if(auth()->check())
                    <li class="dropdown">
                        <button class="dropdown-btn">
                            {{ auth()->user()->name ?? 'User' }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('dashboard') }}">Profile</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="logout-btn">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="login-link">
                        <a href="{{ route('login') }}" class="nav-link">Get Started</a>
                    </li>
                @endif
            </ul>

            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="hero relative h-screen" id="home">
        <!-- Background Image dengan Fixed dan Transparan -->
        <div class="hero-background absolute inset-0 z-0" style="
        background-image: url('img/pendaftaran.jpg');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    ">
            <!-- Overlay Transparan -->
            <div style="position: absolute; inset: 0; background-color: rgba(255,255,255,0.5);"></div>
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>

        <!-- Konten Hero -->
        <div class="container hero-content relative z-10 text-center px-4" style="padding: 100px 20px;">
            <h1 class="hero-title">Lembaga Sertifikasi Profesi</h1>
            <p class="hero-subtitle">Meningkatkan kompetensi profesional melalui sertifikasi berkualitas tinggi yang
                diakui secara nasional dan internasional</p>
            <div class="hero-buttons">
                <a href="#certifications" class="btn btn-primary">Lihat Sertifikasi</a>
                <a href="#contact" class="btn btn-secondary">Hubungi Kami</a>
            </div>
            <div class="hero-stats flex justify-center gap-8 mt-8">
                <div class="stat-item">
                    <div class="stat-number text-2xl font-bold">1000+</div>
                    <div class="stat-label text-sm">Peserta Tersertifikasi</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number text-2xl font-bold">50+</div>
                    <div class="stat-label text-sm">Skema Sertifikasi</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number text-2xl font-bold">15+</div>
                    <div class="stat-label text-sm">Tahun Pengalaman</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tombol Go to Top -->
    <button id="back-to-top" style="
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 16px;
    border-radius: 50%;
    font-size: 18px;
    cursor: pointer;
    display: none;
    z-index: 50;
">⬆</button>

    <script>
        // Tombol Go to Top
        const backToTopBtn = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) { // tampilkan jika scroll > 300px
                backToTopBtn.style.display = 'block';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>




    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Tentang Kami</h2>
                <p class="section-subtitle">Komitmen kami dalam mengembangkan kompetensi profesional</p>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3>Misi Kami</h3>
                    <p>Memberikan layanan sertifikasi profesi yang berkualitas, transparan, dan terpercaya untuk
                        meningkatkan daya saing tenaga kerja Indonesia</p>
                </div>
                <div class="about-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3>Visi Kami</h3>
                    <p>Menjadi lembaga sertifikasi profesi terkemuka yang diakui secara nasional dan internasional dalam
                        mengembangkan kompetensi SDM</p>
                </div>
                <div class="about-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Nilai Kami</h3>
                    <p>Integritas, profesionalisme, dan komitmen dalam setiap layanan sertifikasi yang kami berikan
                        kepada seluruh peserta</p>
                </div>
            </div>
            <div class="about-highlight">
                <div class="highlight-content">
                    <h3>Mengapa Memilih Kami?</h3>
                    <ul class="highlight-list">
                        <li>Terakreditasi oleh BNSP (Badan Nasional Sertifikasi Profesi)</li>
                        <li>Asesor berpengalaman dan tersertifikasi</li>
                        <li>Proses sertifikasi yang transparan dan profesional</li>
                        <li>Sertifikat yang diakui secara nasional dan internasional</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="certifications" id="certifications">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Skema Sertifikasi</h2>
                <p class="section-subtitle">Berbagai pilihan sertifikasi profesi sesuai bidang keahlian Anda</p>
            </div>
            <div class="cert-grid">
                <div class="cert-card">
                    <div class="cert-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3>Teknologi Informasi</h3>
                    <p>Sertifikasi untuk programmer, network engineer, database administrator, dan profesional IT
                        lainnya</p>
                    <div class="cert-gradient"></div>
                </div>
                <div class="cert-card">
                    <div class="cert-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <h3>Manajemen Bisnis</h3>
                    <p>Sertifikasi untuk manajer, supervisor, dan profesional di bidang manajemen dan administrasi
                        bisnis</p>
                    <div class="cert-gradient"></div>
                </div>
                <div class="cert-card">
                    <div class="cert-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                            </path>
                        </svg>
                    </div>
                    <h3>Teknik & Konstruksi</h3>
                    <p>Sertifikasi untuk teknisi, operator, dan profesional di bidang teknik sipil, mesin, dan
                        konstruksi</p>
                    <div class="cert-gradient"></div>
                </div>
                <div class="cert-card">
                    <div class="cert-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Hospitality & Pariwisata</h3>
                    <p>Sertifikasi untuk staff hotel, tour guide, chef, dan profesional di industri perhotelan dan
                        pariwisata</p>
                    <div class="cert-gradient"></div>
                </div>
                <div class="cert-card">
                    <div class="cert-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3>Keuangan & Akuntansi</h3>
                    <p>Sertifikasi untuk akuntan, auditor, analis keuangan, dan profesional di bidang keuangan</p>
                    <div class="cert-gradient"></div>
                </div>
                <div class="cert-card">
                    <div class="cert-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                    </div>
                    <h3>Pendidikan & Pelatihan</h3>
                    <p>Sertifikasi untuk guru, instruktur, trainer, dan profesional di bidang pendidikan dan pelatihan
                    </p>
                    <div class="cert-gradient"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process" id="process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Proses Sertifikasi</h2>
                <p class="section-subtitle">Langkah mudah untuk mendapatkan sertifikat profesional Anda</p>
            </div>
            <div class="process-grid">
                <div class="process-card">
                    <div class="process-number">01</div>
                    <h3>Pendaftaran</h3>
                    <p>Daftar online melalui website kami dengan mengisi formulir dan melengkapi dokumen yang diperlukan
                    </p>
                </div>
                <div class="process-card">
                    <div class="process-number">02</div>
                    <h3>Verifikasi</h3>
                    <p>Tim kami akan memverifikasi dokumen dan persyaratan Anda untuk memastikan kelengkapan data</p>
                </div>
                <div class="process-card">
                    <div class="process-number">03</div>
                    <h3>Asesmen</h3>
                    <p>Ikuti proses asesmen kompetensi yang dilakukan oleh asesor bersertifikat dan berpengalaman</p>
                </div>
                <div class="process-card">
                    <div class="process-number">04</div>
                    <h3>Sertifikasi</h3>
                    <p>Terima sertifikat kompetensi yang diakui secara nasional setelah dinyatakan kompeten</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="section-subtitle">Kami siap membantu Anda dalam proses sertifikasi profesional</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Informasi Kontak</h3>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <div>
                            <h4>Alamat</h4>
                            <p>Jl. Profesional No. 123, Jakarta Selatan, DKI Jakarta 12345</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        <div>
                            <h4>Telepon</h4>
                            <p>+62 21 1234 5678</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <div>
                            <h4>Email</h4>
                            <p><a href="/cdn-cgi/l/email-protection" class="_cf_email_"
                                    data-cfemail="c8a1a6aea788a4bbb8e5a1a6aca7a6adbba1a9e6aba7a5">[email&#160;protected]</a>
                            </p>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <div>
                            <h4>Jam Operasional</h4>
                            <p>Senin - Jumat: 08:00 - 17:00 WIB<br>Sabtu: 08:00 - 13:00 WIB</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>LSP Indonesia</h3>
                    <p>Lembaga Sertifikasi Profesi terpercaya untuk meningkatkan kompetensi profesional Anda</p>
                </div>
                <div class="footer-section">
                    <h4>Link Cepat</h4>
                    <ul>
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#certifications">Sertifikasi</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Sertifikasi</h4>
                    <ul>
                        <li><a href="#certifications">Teknologi Informasi</a></li>
                        <li><a href="#certifications">Manajemen Bisnis</a></li>
                        <li><a href="#certifications">Teknik & Konstruksi</a></li>
                        <li><a href="#certifications">Hospitality</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li>+62 21 1234 5678</li>
                        <li><a href="/cdn-cgi/l/email-protection" class="_cf_email_"
                                data-cfemail="87eee9e1e8c7ebf4f7aaeee9e3e8e9e2f4eee6a9e4e8ea">[email&#160;protected]</a>
                        </li>
                        <li>Jl. Profesional No. 123<br>Jakarta Selatan</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 LSP Indonesia. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- (Semua bagian lain: About, Certifications, Process, Contact, Footer tetap seperti kode kamu kirim di atas) -->
    <script>
        window.isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};
        window.userName = "{{ auth()->check() ? auth()->user()->name : '' }}";
    </script>

    @vite('resources/js/script.js')
</body>

</html>
