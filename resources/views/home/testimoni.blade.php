<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimoni Peserta | LSP</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { 
      font-family: 'Poppins', sans-serif; 
    }
    
    .testimonial-card {
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .testimonial-card:hover {
      transform: translateY(-8px);
    }
    
    .fade-in {
      animation: fadeIn 0.7s ease-in;
    }
    
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .slide-in {
      animation: slideIn 0.7s ease-out;
    }
    
    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .stat-card {
      transition: all 0.3s ease;
    }
    
    .stat-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    .filter-btn {
      transition: all 0.3s ease;
    }
    
    .filter-btn.active {
      background: linear-gradient(to right, #2563eb, #4f46e5);
      color: white;
      transform: scale(1.05);
    }
    
    .carousel-dot {
      transition: all 0.3s ease;
    }
    
    .carousel-dot.active {
      width: 2rem;
      background-color: #2563eb;
    }
    
    .glass-effect {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(10px);
    }
    
    .hero-pattern {
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23fff' fill-opacity='0.1'%3E%3Cpath d='M36 34c0-2.21-1.79-4-4-4s-4 1.79-4 4 1.79 4 4 4 4-1.79 4-4zm0-10c0-2.21-1.79-4-4-4s-4 1.79-4 4 1.79 4 4 4 4-1.79 4-4zm0-10c0-2.21-1.79-4-4-4s-4 1.79-4 4 1.79 4 4 4 4-1.79 4-4z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
  </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">

  <!-- Header -->
  <header class="relative overflow-hidden bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 text-white py-20">
    <div class="absolute inset-0 hero-pattern opacity-20"></div>
    <div class="relative max-w-6xl mx-auto px-6 text-center fade-in">
      <span class="inline-block mb-4 px-4 py-2 bg-white/20 text-white rounded-full text-sm font-medium border border-white/30">
        ⭐ Testimoni Terpercaya
      </span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
        Testimoni Peserta
      </h1>
      <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto">
        Pengalaman nyata peserta dalam mengikuti sertifikasi LSP
      </p>
    </div>
  </header>

  <!-- Statistics Section -->
  <section class="max-w-6xl mx-auto px-6 -mt-12 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="stat-card glass-effect rounded-2xl shadow-xl p-6 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 mb-4">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-2" data-target="5000">
          0+
        </div>
        <div class="text-gray-600 font-medium">Total Peserta</div>
      </div>

      <div class="stat-card glass-effect rounded-2xl shadow-xl p-6 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 mb-4">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
          </svg>
        </div>
        <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-2" data-target="98">
          0%
        </div>
        <div class="text-gray-600 font-medium">Tingkat Kepuasan</div>
      </div>

      <div class="stat-card glass-effect rounded-2xl shadow-xl p-6 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 mb-4">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
          </svg>
        </div>
        <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-2" data-target="95">
          0%
        </div>
        <div class="text-gray-600 font-medium">Tingkat Kelulusan</div>
      </div>
    </div>
  </section>

  <!-- Filter & Testimonials Section -->
  <section class="max-w-6xl mx-auto px-6 py-12">
    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-3 mb-8">
      <button class="filter-btn active px-6 py-2 rounded-full font-medium border-2 border-gray-300" data-filter="all">
        All
      </button>
      <button class="filter-btn px-6 py-2 rounded-full font-medium border-2 border-gray-300 hover:bg-blue-50 hover:border-blue-300" data-filter="programmer">
        Programmer
      </button>
      <button class="filter-btn px-6 py-2 rounded-full font-medium border-2 border-gray-300 hover:bg-blue-50 hover:border-blue-300" data-filter="supervisor">
        Supervisor
      </button>
      <button class="filter-btn px-6 py-2 rounded-full font-medium border-2 border-gray-300 hover:bg-blue-50 hover:border-blue-300" data-filter="operator">
        Operator
      </button>
    </div>

    <!-- Desktop Grid View -->
    <div id="testimonials-grid" class="hidden md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="testimonial-card glass-effect rounded-2xl shadow-lg overflow-hidden" data-category="programmer">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div class="p-6">
          <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <div class="flex items-center mb-4">
            <div class="relative">
              <img src="https://i.pravatar.cc/150?img=1" alt="Rizky Pratama" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
              <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
            </div>
            <div class="ml-4 flex-1">
              <h3 class="font-bold text-lg text-gray-900">Rizky Pratama</h3>
              <p class="text-sm text-gray-600">Programmer</p>
              <div class="flex gap-1 mt-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-gray-700 leading-relaxed italic">"Sertifikasi LSP membantu saya meningkatkan skill pemrograman dan lebih percaya diri di dunia kerja. Materinya lengkap dan asesor sangat profesional!"</p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="testimonial-card glass-effect rounded-2xl shadow-lg overflow-hidden" data-category="supervisor">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div class="p-6">
          <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <div class="flex items-center mb-4">
            <div class="relative">
              <img src="https://i.pravatar.cc/150?img=2" alt="Siti Aisyah" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
              <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
            </div>
            <div class="ml-4 flex-1">
              <h3 class="font-bold text-lg text-gray-900">Siti Aisyah</h3>
              <p class="text-sm text-gray-600">Supervisor</p>
              <div class="flex gap-1 mt-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-gray-700 leading-relaxed italic">"Proses sertifikasi mudah dipahami, dan saya bisa langsung mempraktikkan materi di pekerjaan saya. Sangat direkomendasikan!"</p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="testimonial-card glass-effect rounded-2xl shadow-lg overflow-hidden" data-category="operator">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div class="p-6">
          <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <div class="flex items-center mb-4">
            <div class="relative">
              <img src="https://i.pravatar.cc/150?img=3" alt="Ahmad Fauzi" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
              <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
            </div>
            <div class="ml-4 flex-1">
              <h3 class="font-bold text-lg text-gray-900">Ahmad Fauzi</h3>
              <p class="text-sm text-gray-600">Operator Teknik</p>
              <div class="flex gap-1 mt-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-gray-700 leading-relaxed italic">"Asesor LSP sangat profesional dan memberikan feedback yang membangun. Sertifikatnya juga diakui secara nasional, membantu karier saya."</p>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="testimonial-card glass-effect rounded-2xl shadow-lg overflow-hidden" data-category="programmer">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div class="p-6">
          <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <div class="flex items-center mb-4">
            <div class="relative">
              <img src="https://i.pravatar.cc/150?img=4" alt="Dewi Lestari" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
              <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
            </div>
            <div class="ml-4 flex-1">
              <h3 class="font-bold text-lg text-gray-900">Dewi Lestari</h3>
              <p class="text-sm text-gray-600">Web Developer</p>
              <div class="flex gap-1 mt-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-gray-700 leading-relaxed italic">"Pengalaman terbaik dalam mengikuti sertifikasi! Materi yang diberikan sangat aplikatif dan langsung bisa diterapkan di project nyata."</p>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="testimonial-card glass-effect rounded-2xl shadow-lg overflow-hidden" data-category="supervisor">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div class="p-6">
          <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <div class="flex items-center mb-4">
            <div class="relative">
              <img src="https://i.pravatar.cc/150?img=5" alt="Budi Santoso" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
              <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
            </div>
            <div class="ml-4 flex-1">
              <h3 class="font-bold text-lg text-gray-900">Budi Santoso</h3>
              <p class="text-sm text-gray-600">Team Leader</p>
              <div class="flex gap-1 mt-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-gray-700 leading-relaxed italic">"LSP memberikan standar kompetensi yang jelas. Setelah tersertifikasi, tim saya lebih terstruktur dan produktif dalam bekerja."</p>
        </div>
      </div>

      <!-- Testimonial 6 -->
      <div class="testimonial-card glass-effect rounded-2xl shadow-lg overflow-hidden" data-category="operator">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div class="p-6">
          <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <div class="flex items-center mb-4">
            <div class="relative">
              <img src="https://i.pravatar.cc/150?img=6" alt="Rina Marlina" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
              <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
            </div>
            <div class="ml-4 flex-1">
              <h3 class="font-bold text-lg text-gray-900">Rina Marlina</h3>
              <p class="text-sm text-gray-600">Quality Control</p>
              <div class="flex gap-1 mt-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-gray-700 leading-relaxed italic">"Sertifikasi ini membuka banyak peluang karier baru. Proses asesmen yang fair dan transparan membuat saya yakin dengan kompetensi yang saya miliki."</p>
        </div>
      </div>

      <!-- Testimonial 7 -->
      <div class="testimonial-card glass-effect rounded-2xl shadow-lg overflow-hidden" data-category="programmer">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div class="p-6">
          <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <div class="flex items-center mb-4">
            <div class="relative">
              <img src="https://i.pravatar.cc/150?img=7" alt="Andi Wijaya" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
              <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
            </div>
            <div class="ml-4 flex-1">
              <h3 class="font-bold text-lg text-gray-900">Andi Wijaya</h3>
              <p class="text-sm text-gray-600">Full Stack Developer</p>
              <div class="flex gap-1 mt-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-gray-700 leading-relaxed italic">"Materi sertifikasi up-to-date dengan teknologi terkini. Sangat membantu saya dalam mengembangkan aplikasi yang lebih berkualitas."</p>
        </div>
      </div>

      <!-- Testimonial 8 -->
      <div class="testimonial-card glass-effect rounded-2xl shadow-lg overflow-hidden" data-category="supervisor">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div class="p-6">
          <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <div class="flex items-center mb-4">
            <div class="relative">
              <img src="https://i.pravatar.cc/150?img=8" alt="Maya Putri" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
              <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
            </div>
            <div class="ml-4 flex-1">
              <h3 class="font-bold text-lg text-gray-900">Maya Putri</h3>
              <p class="text-sm text-gray-600">Project Manager</p>
              <div class="flex gap-1 mt-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-gray-700 leading-relaxed italic">"Sertifikasi LSP meningkatkan kredibilitas saya sebagai project manager. Klien lebih percaya dengan kompetensi yang tersertifikasi."</p>
        </div>
      </div>

      <!-- Testimonial 9 -->
      <div class="testimonial-card glass-effect rounded-2xl shadow-lg overflow-hidden" data-category="operator">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div class="p-6">
          <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <div class="flex items-center mb-4">
            <div class="relative">
              <img src="https://i.pravatar.cc/150?img=9" alt="Hendra Gunawan" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
              <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
            </div>
            <div class="ml-4 flex-1">
              <h3 class="font-bold text-lg text-gray-900">Hendra Gunawan</h3>
              <p class="text-sm text-gray-600">Teknisi Maintenance</p>
              <div class="flex gap-1 mt-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-gray-700 leading-relaxed italic">"Pelatihan dan asesmen yang komprehensif. Saya merasa lebih kompeten dan siap menghadapi tantangan di lapangan kerja."</p>
        </div>
      </div>
    </div>

    <!-- Mobile Carousel View -->
    <div id="mobile-carousel" class="md:hidden">
      <div class="glass-effect rounded-2xl shadow-xl overflow-hidden">
        <div class="h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>
        <div id="carousel-content" class="p-6">
          <!-- Content will be dynamically inserted -->
        </div>
      </div>

      <!-- Carousel Controls -->
      <div class="flex justify-between items-center mt-6">
        <button id="prev-btn" class="p-3 rounded-full border-2 border-gray-300 hover:bg-blue-50 hover:border-blue-300 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
        </button>
        <div id="carousel-dots" class="flex gap-2">
          <!-- Dots will be dynamically inserted -->
        </div>
        <button id="next-btn" class="p-3 rounded-full border-2 border-gray-300 hover:bg-blue-50 hover:border-blue-300 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </button>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 py-16 relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern opacity-20"></div>
    <div class="relative max-w-4xl mx-auto px-6 text-center text-white">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Ingin menjadi peserta kami?</h2>
      <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
        Daftar sekarang dan tingkatkan kompetensi profesional Anda bersama ribuan peserta lainnya!
      </p>
      <a href="#" class="inline-block bg-white text-blue-700 hover:bg-blue-50 font-semibold px-8 py-4 text-lg rounded-full shadow-2xl hover:shadow-3xl transition-all duration-300 hover:scale-105">
        Daftar Sekarang
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-slate-900 text-white py-8">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <p class="text-gray-400">© 2024 LSP. Semua hak dilindungi.</p>
    </div>
  </footer>

  <script>
    // Testimonials data
    const testimonials = [
      { name: 'Rizky Pratama', role: 'Programmer', category: 'programmer', image: 'https://i.pravatar.cc/150?img=1', rating: 5, text: 'Sertifikasi LSP membantu saya meningkatkan skill pemrograman dan lebih percaya diri di dunia kerja. Materinya lengkap dan asesor sangat profesional!' },
      { name: 'Siti Aisyah', role: 'Supervisor', category: 'supervisor', image: 'https://i.pravatar.cc/150?img=2', rating: 5, text: 'Proses sertifikasi mudah dipahami, dan saya bisa langsung mempraktikkan materi di pekerjaan saya. Sangat direkomendasikan!' },
      { name: 'Ahmad Fauzi', role: 'Operator Teknik', category: 'operator', image: 'https://i.pravatar.cc/150?img=3', rating: 5, text: 'Asesor LSP sangat profesional dan memberikan feedback yang membangun. Sertifikatnya juga diakui secara nasional, membantu karier saya.' },
      { name: 'Dewi Lestari', role: 'Web Developer', category: 'programmer', image: 'https://i.pravatar.cc/150?img=4', rating: 5, text: 'Pengalaman terbaik dalam mengikuti sertifikasi! Materi yang diberikan sangat aplikatif dan langsung bisa diterapkan di project nyata.' },
      { name: 'Budi Santoso', role: 'Team Leader', category: 'supervisor', image: 'https://i.pravatar.cc/150?img=5', rating: 4, text: 'LSP memberikan standar kompetensi yang jelas. Setelah tersertifikasi, tim saya lebih terstruktur dan produktif dalam bekerja.' },
      { name: 'Rina Marlina', role: 'Quality Control', category: 'operator', image: 'https://i.pravatar.cc/150?img=6', rating: 5, text: 'Sertifikasi ini membuka banyak peluang karier baru. Proses asesmen yang fair dan transparan membuat saya yakin dengan kompetensi yang saya miliki.' },
      { name: 'Andi Wijaya', role: 'Full Stack Developer', category: 'programmer', image: 'https://i.pravatar.cc/150?img=7', rating: 5, text: 'Materi sertifikasi up-to-date dengan teknologi terkini. Sangat membantu saya dalam mengembangkan aplikasi yang lebih berkualitas.' },
      { name: 'Maya Putri', role: 'Project Manager', category: 'supervisor', image: 'https://i.pravatar.cc/150?img=8', rating: 5, text: 'Sertifikasi LSP meningkatkan kredibilitas saya sebagai project manager. Klien lebih percaya dengan kompetensi yang tersertifikasi.' },
      { name: 'Hendra Gunawan', role: 'Teknisi Maintenance', category: 'operator', image: 'https://i.pravatar.cc/150?img=9', rating: 4, text: 'Pelatihan dan asesmen yang komprehensif. Saya merasa lebih kompeten dan siap menghadapi tantangan di lapangan kerja.' }
    ];

    let currentFilter = 'all';
    let currentIndex = 0;

    // Animate statistics on scroll
    function animateStats() {
      const stats = document.querySelectorAll('[data-target]');
      stats.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-target'));
        const suffix = stat.textContent.includes('%') ? '%' : '+';
        let current = 0;
        const increment = target / 50;
        
        const timer = setInterval(() => {
          current += increment;
          if (current >= target) {
            current = target;
            clearInterval(timer);
          }
          stat.textContent = Math.floor(current) + suffix;
        }, 30);
      });
    }

    // Intersection Observer for stats animation
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateStats();
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    const statsSection = document.querySelector('.stat-card').parentElement.parentElement;
    observer.observe(statsSection);

    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const testimonialCards = document.querySelectorAll('.testimonial-card');

    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Update active button
        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        
        // Get filter value
        const filter = button.getAttribute('data-filter');
        currentFilter = filter;
        currentIndex = 0;
        
        // Filter cards
        testimonialCards.forEach(card => {
          if (filter === 'all' || card.getAttribute('data-category') === filter) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });

        // Update mobile carousel
        updateMobileCarousel();
      });
    });

    // Mobile carousel functionality
    function getFilteredTestimonials() {
      if (currentFilter === 'all') {
        return testimonials;
      }
      return testimonials.filter(t => t.category === currentFilter);
    }

    function renderStars(rating) {
      let stars = '';
      for (let i = 0; i < 5; i++) {
        if (i < rating) {
          stars += '<svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>';
        } else {
          stars += '<svg class="w-4 h-4 text-gray-300" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>';
        }
      }
      return stars;
    }

    function updateMobileCarousel() {
      const filtered = getFilteredTestimonials();
      const content = document.getElementById('carousel-content');
      const dots = document.getElementById('carousel-dots');
      
      if (filtered.length === 0) return;
      
      const testimonial = filtered[currentIndex];
      
      content.innerHTML = `
        <svg class="w-8 h-8 text-blue-200 mb-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
        </svg>
        <div class="flex items-center mb-4">
          <div class="relative">
            <img src="${testimonial.image}" alt="${testimonial.name}" class="w-16 h-16 rounded-full object-cover ring-4 ring-blue-100">
            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
          </div>
          <div class="ml-4 flex-1">
            <h3 class="font-bold text-lg text-gray-900">${testimonial.name}</h3>
            <p class="text-sm text-gray-600">${testimonial.role}</p>
            <div class="flex gap-1 mt-1">
              ${renderStars(testimonial.rating)}
            </div>
          </div>
        </div>
        <p class="text-gray-700 leading-relaxed italic">"${testimonial.text}"</p>
      `;
      
      // Update dots
      dots.innerHTML = '';
      filtered.forEach((_, index) => {
        const dot = document.createElement('button');
        dot.className = `carousel-dot w-2 h-2 rounded-full ${index === currentIndex ? 'active' : 'bg-gray-300'}`;
        dot.addEventListener('click', () => {
          currentIndex = index;
          updateMobileCarousel();
        });
        dots.appendChild(dot);
      });
    }

    document.getElementById('prev-btn').addEventListener('click', () => {
      const filtered = getFilteredTestimonials();
      currentIndex = (currentIndex - 1 + filtered.length) % filtered.length;
      updateMobileCarousel();
    });

    document.getElementById('next-btn').addEventListener('click', () => {
      const filtered = getFilteredTestimonials();
      currentIndex = (currentIndex + 1) % filtered.length;
      updateMobileCarousel();
    });

    // Initialize mobile carousel
    updateMobileCarousel();
  </script>

</body>
</html>