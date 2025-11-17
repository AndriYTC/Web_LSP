<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Sertifikasi | LSP</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      scroll-behavior: smooth;
    }

    .tab-active {
      border-bottom: 3px solid #2563eb;
      font-weight: 600;
      color: #2563eb;
      transform: translateY(-1px);
      transition: all 0.3s ease;
    }

    .tab-inactive {
      color: #6b7280;
      transition: all 0.3s ease;
      position: relative;
    }

    .tab-inactive:hover {
      color: #2563eb;
      transform: translateY(-1px);
    }

    .tab-inactive::after {
      content: '';
      position: absolute;
      bottom: -3px;
      left: 0;
      width: 0;
      height: 3px;
      background-color: #2563eb;
      transition: width 0.3s ease;
    }

    .tab-inactive:hover::after {
      width: 100%;
    }

    .fade-in {
      animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .hero-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      background-size: 200% 200%;
      animation: gradientShift 8s ease infinite;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50% }
      50% { background-position: 100% 50% }
      100% { background-position: 0% 50% }
    }

    .card-hover {
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .card-hover:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    .btn-primary::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }

    .btn-primary:hover::before {
      left: 100%;
    }

    .btn-secondary {
      background: white;
      color: #374151;
      border: 2px solid #e5e7eb;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background: #f9fafb;
      border-color: #d1d5db;
      transform: translateY(-1px);
    }

    .loading-dots {
      display: inline-block;
    }

    .loading-dots::after {
      content: '';
      animation: dots 1.5s steps(5, end) infinite;
    }

    @keyframes dots {
      0%, 20% { content: ''; }
      40% { content: '.'; }
      60% { content: '..'; }
      80%, 100% { content: '...'; }
    }
  </style>
</head>

<body class="bg-gray-50 min-h-screen">
  <!-- Back Button -->

  <!-- Hero Section -->
  <section class="hero-gradient text-white py-28 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-6">
      <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight fade-in">
        Teknologi Informasi <span class="text-blue-200">-</span> Programmer
      </h1>
      <p class="text-xl md:text-2xl text-blue-100 mb-8 fade-in" style="animation-delay: 0.2s;">
        Tingkatkan kompetensi profesional Anda melalui sertifikasi LSP yang diakui industri
      </p>
      <div class="flex justify-center space-x-4 fade-in" style="animation-delay: 0.4s;">
        <span class="bg-white/20 px-4 py-2 rounded-full text-sm backdrop-blur-sm">💻 Programming</span>
        <span class="bg-white/20 px-4 py-2 rounded-full text-sm backdrop-blur-sm">📊 Database</span>
        <span class="bg-white/20 px-4 py-2 rounded-full text-sm backdrop-blur-sm">🎯 Praktis</span>
      </div>
    </div>
  </section>

  <!-- Breadcrumb -->
  <div class="max-w-6xl mx-auto px-6 mt-8">
    <nav class="flex items-center space-x-2 text-sm text-gray-600">
      <a href="index.html" class="hover:text-blue-600 transition-colors duration-200">Beranda</a>
      <span class="text-gray-400">/</span>
      <a href="certifications.html" class="hover:text-blue-600 transition-colors duration-200">Sertifikasi</a>
      <span class="text-gray-400">/</span>
      <span class="font-semibold text-gray-800">Teknologi Informasi - Programmer</span>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="max-w-5xl mx-auto px-6 my-12">
    <div class="bg-white rounded-2xl shadow-xl card-hover p-8 md:p-12">

      <!-- Tabs Navigation -->
      <div class="flex flex-wrap gap-4 md:gap-6 border-b border-gray-200 pb-4 mb-8">
        <button id="tab-desc" class="tab-active py-3 px-1 text-lg font-medium">📋 Deskripsi</button>
        <button id="tab-req" class="tab-inactive py-3 px-1 text-lg font-medium">✅ Persyaratan</button>
        <button id="tab-proc" class="tab-inactive py-3 px-1 text-lg font-medium">🔄 Proses</button>
        <button id="tab-benefit" class="tab-inactive py-3 px-1 text-lg font-medium">⭐ Benefit</button>
      </div>

      <!-- Tab Content -->
      <div id="content-desc" class="fade-in">
        <div class="prose prose-lg max-w-none">
          <p class="text-gray-700 mb-6 text-lg leading-relaxed">
            Sertifikasi <strong class="text-blue-600">Teknologi Informasi - Programmer</strong> dirancang khusus untuk profesional IT yang ingin meningkatkan keahlian mereka dalam pemrograman, pengembangan software, dan pengelolaan database modern. Anda akan dibimbing secara teori dan praktek oleh asesor bersertifikat dengan pengalaman industri yang luas.
          </p>

          <div class="grid md:grid-cols-2 gap-8 my-8">
            <div class="space-y-4">
              <h3 class="text-xl font-semibold text-gray-800 mb-4">🛠️ Teknologi yang Dipelajari</h3>
              <ul class="list-disc list-inside text-gray-700 space-y-3">
                <li class="flex items-center">
                  <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                  Java Programming & Spring Framework
                </li>
                <li class="flex items-center">
                  <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                  PHP & Laravel Development
                </li>
                <li class="flex items-center">
                  <span class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></span>
                  Python & Django Framework
                </li>
                <li class="flex items-center">
                  <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                  Database Management (MySQL, PostgreSQL)
                </li>
              </ul>
            </div>

            <div class="space-y-4">
              <h3 class="text-xl font-semibold text-gray-800 mb-4">🎯 Metode Pembelajaran</h3>
              <ul class="list-disc list-inside text-gray-700 space-y-3">
                <li class="flex items-center">
                  <span class="w-2 h-2 bg-red-500 rounded-full mr-3"></span>
                  Hands-on project development
                </li>
                <li class="flex items-center">
                  <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                  Code review & best practices
                </li>
                <li class="flex items-center">
                  <span class="w-2 h-2 bg-teal-500 rounded-full mr-3"></span>
                  Real-world case studies
                </li>
                <li class="flex items-center">
                  <span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>
                  Competency evaluation
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div id="content-req" class="hidden">
        <div class="prose prose-lg max-w-none fade-in">
          <h3 class="text-2xl font-semibold text-gray-800 mb-6">Persyaratan Mengikuti Sertifikasi</h3>

          <div class="grid md:grid-cols-2 gap-8">
            <div class="space-y-6">
              <div class="bg-blue-50 rounded-xl p-6">
                <h4 class="font-semibold text-blue-800 mb-3 text-lg">🎓 Pendidikan</h4>
                <ul class="list-disc list-inside text-blue-700 space-y-2">
                  <li>Minimal SMK Jurusan IT/Teknik Komputer</li>
                  <li>Diploma/S1 Teknik Informatika/Ilmu Komputer</li>
                  <li>Atau bidang terkait teknologi informasi</li>
                </ul>
              </div>

              <div class="bg-green-50 rounded-xl p-6">
                <h4 class="font-semibold text-green-800 mb-3 text-lg">💼 Pengalaman</h4>
                <ul class="list-disc list-inside text-green-700 space-y-2">
                  <li>Minimal 1 tahun pengalaman programming</li>
                  <li>Portfolio project (opsional tapi direkomendasikan)</li>
                  <li>Pemahaman dasar algoritma dan struktur data</li>
                </ul>
              </div>
            </div>

            <div class="space-y-6">
              <div class="bg-purple-50 rounded-xl p-6">
                <h4 class="font-semibold text-purple-800 mb-3 text-lg">🛠️ Teknis</h4>
                <ul class="list-disc list-inside text-purple-700 space-y-2">
                  <li>Menguasai minimal 1 bahasa pemrograman</li>
                  <li>Pemahaman database dan SQL dasar</li>
                  <li>Pengalaman dengan version control (Git)</li>
                </ul>
              </div>

              <div class="bg-orange-50 rounded-xl p-6">
                <h4 class="font-semibold text-orange-800 mb-3 text-lg">💻 Perangkat</h4>
                <ul class="list-disc list-inside text-orange-700 space-y-2">
                  <li>Laptop dengan spesifikasi standar development</li>
                  <li>Koneksi internet stabil</li>
                  <li>Software development tools terinstall</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="content-proc" class="hidden">
        <div class="prose prose-lg max-w-none fade-in">
          <h3 class="text-2xl font-semibold text-gray-800 mb-6">Proses Sertifikasi</h3>

          <div class="space-y-6">
            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors duration-200">
              <div class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">1</div>
              <div>
                <h4 class="font-semibold text-gray-800 mb-2">Pendaftaran Online</h4>
                <p class="text-gray-600">Isi formulir pendaftaran melalui website resmi dan upload dokumen yang diperlukan</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors duration-200">
              <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">2</div>
              <div>
                <h4 class="font-semibold text-gray-800 mb-2">Verifikasi Dokumen</h4>
                <p class="text-gray-600">Tim kami akan memverifikasi kelengkapan dan keabsahan dokumen yang diupload</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors duration-200">
              <div class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold">3</div>
              <div>
                <h4 class="font-semibold text-gray-800 mb-2">Asesmen Kompetensi</h4>
                <p class="text-gray-600">Sesi assessment oleh asesor bersertifikat untuk menilai kemampuan teknis</p>
              </div>
            </div>

            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors duration-200">
              <div class="flex-shrink-0 w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">4</div>
              <div>
                <h4 class="font-semibold text-gray-800 mb-2">Evaluasi & Sertifikasi</h4>
                <p class="text-gray-600">Review hasil assessment dan penerbitan sertifikat digital yang diakui</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="content-benefit" class="hidden">
        <div class="prose prose-lg max-w-none fade-in">
          <h3 class="text-2xl font-semibold text-gray-800 mb-6">Manfaat Sertifikasi</h3>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl">
              <div class="text-3xl mb-4">🚀</div>
              <h4 class="font-semibold text-gray-800 mb-2">Karir Lebih Cepat</h4>
              <p class="text-gray-600 text-sm">Akses ke posisi kerja dengan gaji lebih tinggi</p>
            </div>

            <div class="text-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-xl">
              <div class="text-3xl mb-4">🏆</div>
              <h4 class="font-semibold text-gray-800 mb-2">Pengakuan Industri</h4>
              <p class="text-gray-600 text-sm">Sertifikat diakui oleh perusahaan teknologi ternama</p>
            </div>

            <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl">
              <div class="text-3xl mb-4">📈</div>
              <h4 class="font-semibold text-gray-800 mb-2">Skill Validasi</h4>
              <p class="text-gray-600 text-sm">Bukti kompetensi yang terstandarisasi</p>
            </div>

            <div class="text-center p-6 bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl">
              <div class="text-3xl mb-4">🌐</div>
              <h4 class="font-semibold text-gray-800 mb-2">Networking</h4>
              <p class="text-gray-600 text-sm">Bergabung dengan komunitas profesional IT</p>
            </div>

            <div class="text-center p-6 bg-gradient-to-br from-red-50 to-red-100 rounded-xl">
              <div class="text-3xl mb-4">💼</div>
              <h4 class="font-semibold text-gray-800 mb-2">Portfolio Kuat</h4>
              <p class="text-gray-600 text-sm">Proyek nyata untuk melengkapi portfolio</p>
            </div>

            <div class="text-center p-6 bg-gradient-to-br from-teal-50 to-teal-100 rounded-xl">
              <div class="text-3xl mb-4">🔄</div>
              <h4 class="font-semibold text-gray-800 mb-2">Update Skill</h4>
              <p class="text-gray-600 text-sm">Teknologi dan metode terbaru di industri</p>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="text-center mt-12 pt-8 border-t border-gray-200">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Siap Mengembangkan Karir Programming Anda?</h3>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
          Bergabunglah dengan ratusan profesional IT yang telah meningkatkan kompetensi mereka melalui sertifikasi LSP
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
          <a href="{{ url('/') }}" class="btn-secondary px-8 py-4 rounded-lg border-2 border-black font-semibold text-lg">
            Kembali ke Beranda
          </a>
          <button id="register-btn" class="btn-primary text-white px-12 py-4 rounded-xl font-semibold text-lg shadow-lg">
            Daftar Sekarang
          </button>
        </div>
        <div id="loading-state" class="hidden mt-4">
          <p class="text-gray-500 loading-dots">Mempersiapkan formulir pendaftaran</p>
        </div>
      </div>

    </div>
  </div>

  <script>
    // Tab System
    const tabs = {
      'tab-desc': 'content-desc',
      'tab-req': 'content-req',
      'tab-proc': 'content-proc',
      'tab-benefit': 'content-benefit'
    };

    function resetTabs() {
      // Reset all tabs
      Object.keys(tabs).forEach(tabId => {
        const tab = document.getElementById(tabId);
        const content = document.getElementById(tabs[tabId]);

        tab.classList.remove('tab-active');
        tab.classList.add('tab-inactive');
        content.classList.add('hidden');
        content.classList.remove('fade-in');
      });
    }

    function activateTab(tabId) {
      resetTabs();

      const tab = document.getElementById(tabId);
      const content = document.getElementById(tabs[tabId]);

      tab.classList.add('tab-active');
      tab.classList.remove('tab-inactive');
      content.classList.remove('hidden');

      // Trigger reflow for animation
      void content.offsetWidth;
      content.classList.add('fade-in');
    }

    // Add event listeners to tabs
    Object.keys(tabs).forEach(tabId => {
      document.getElementById(tabId).addEventListener('click', () => activateTab(tabId));
    });

    // Register button interaction
    const registerBtn = document.getElementById('register-btn');
    const loadingState = document.getElementById('loading-state');

    registerBtn.addEventListener('click', function() {
      // Show loading state
      this.disabled = true;
      this.textContent = 'Memproses...';
      loadingState.classList.remove('hidden');

      // Simulate form preparation
      setTimeout(() => {
        window.location.href = 'register';
      }, 1500);
    });

    // Add scroll animation for hero section
    window.addEventListener('scroll', function() {
      const hero = document.querySelector('.hero-gradient');
      const scrolled = window.pageYOffset;
      const rate = scrolled * -0.5;
      hero.style.transform = `translateY(${rate}px)`;
    });

    // Initialize first tab
    activateTab('tab-desc');
  </script>

</body>
</html>
