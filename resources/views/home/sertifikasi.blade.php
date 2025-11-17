<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Sertifikasi | LSP</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { font-family: 'Poppins', sans-serif; }
    .tab-active { border-b-2 border-blue-600 font-semibold text-blue-600; }
    .tab-inactive { text-gray-600 hover:text-blue-600 transition; }

  </style>
</head>
<body class="bg-gray-100">

  <!-- Hero -->
  <section class="bg-gradient-to-r from-blue-600 to-blue-500 text-white py-24 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-3">Teknologi Informasi - Programmer</h1>
    <p class="text-lg md:text-xl">Tingkatkan kompetensi profesional Anda melalui sertifikasi LSP</p>
  </section>

  <!-- Breadcrumb -->
  <div class="max-w-6xl mx-auto px-6 mt-6 text-gray-600 text-sm">
    <nav class="flex items-center space-x-2">
      <a href="index.html" class="hover:text-blue-600">Beranda</a>
      <span>/</span>
      <a href="certifications.html" class="hover:text-blue-600">Sertifikasi</a>
      <span>/</span>
      <span class="font-semibold text-gray-800">Teknologi Informasi - Programmer</span>
    </nav>
  </div>

  <!-- Sertifikasi Container -->
  <div class="max-w-5xl mx-auto px-6 mt-8 bg-white rounded-2xl shadow-lg p-8">
    
    <!-- Tabs -->
    <div class="flex space-x-6 border-b mb-6">
      <button id="tab-desc" class="tab-active py-2">Deskripsi</button>
      <button id="tab-req" class="tab-inactive py-2">Persyaratan</button>
      <button id="tab-proc" class="tab-inactive py-2">Proses</button>
    </div>

    <!-- Tab Content -->
    <div id="content-desc">
      <p class="text-gray-700 mb-4">
        Sertifikasi ini dirancang untuk profesional IT yang ingin meningkatkan keahlian mereka
        dalam pemrograman, pengembangan software, dan pengelolaan database. Anda akan dibimbing
        secara teori dan praktek oleh asesor bersertifikat.
      </p>
      <ul class="list-disc list-inside text-gray-700 space-y-1">
        <li>Materi mencakup Java, PHP, Python, dan manajemen database.</li>
        <li>Latihan praktis untuk membangun proyek nyata.</li>
        <li>Evaluasi kompetensi untuk menilai kemampuan peserta.</li>
      </ul>
    </div>

    <div id="content-req" class="hidden">
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>Minimal pendidikan SMK / S1 terkait IT</li>
        <li>Pengalaman 1 tahun di bidang programming</li>
        <li>Menguasai bahasa pemrograman populer (Java, PHP, Python)</li>
        <li>Memiliki laptop dengan spesifikasi standar</li>
      </ul>
    </div>

    <div id="content-proc" class="hidden">
      <ol class="list-decimal list-inside text-gray-700 space-y-2">
        <li>Pendaftaran online melalui website</li>
        <li>Asesmen kompetensi oleh asesor bersertifikat</li>
        <li>Evaluasi hasil dan penerbitan sertifikat</li>
        <li>Pengambilan sertifikat secara digital</li>
      </ol>
    </div>

    <!-- Daftar Button -->
    <div class="text-center mt-8">
      <a href="register.html" class="bg-blue-600 text-white px-8 py-3 rounded-xl font-semibold shadow hover:bg-blue-700 transition">
        Daftar Sekarang
      </a>
    </div>

  </div>

  <!-- Script Tabs -->
  <script>
    const tabDesc = document.getElementById('tab-desc');
    const tabReq = document.getElementById('tab-req');
    const tabProc = document.getElementById('tab-proc');

    const contentDesc = document.getElementById('content-desc');
    const contentReq = document.getElementById('content-req');
    const contentProc = document.getElementById('content-proc');

    function resetTabs() {
      tabDesc.classList.remove('tab-active'); tabDesc.classList.add('tab-inactive');
      tabReq.classList.remove('tab-active'); tabReq.classList.add('tab-inactive');
      tabProc.classList.remove('tab-active'); tabProc.classList.add('tab-inactive');
      contentDesc.classList.add('hidden'); contentReq.classList.add('hidden'); contentProc.classList.add('hidden');
    }

    tabDesc.addEventListener('click', () => {
      resetTabs();
      tabDesc.classList.add('tab-active'); tabDesc.classList.remove('tab-inactive');
      contentDesc.classList.remove('hidden');
    });

    tabReq.addEventListener('click', () => {
      resetTabs();
      tabReq.classList.add('tab-active'); tabReq.classList.remove('tab-inactive');
      contentReq.classList.remove('hidden');
    });

    tabProc.addEventListener('click', () => {
      resetTabs();
      tabProc.classList.add('tab-active'); tabProc.classList.remove('tab-inactive');
      contentProc.classList.remove('hidden');
    });
  </script>

</body>
</html>
