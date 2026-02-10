<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SMK Nusantara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-3 py-3 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="bg-blue-600 p-2 rounded-lg">
                <!-- Graduation Cap SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 14l9-5-9-5-9 5 9 5z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z"/>
                </svg>
            </div>
            <span class="font-bold text-lg">SMK Nusantara</span>
        </div>

        <ul class="hidden md:flex gap-8 text-gray-700 font-medium ml-96">
            <li><a href="#beranda" class="hover:text-blue-600">Beranda</a></li>
            <li><a href="#about" class="hover:text-blue-600">Tentang</a></li>
            <li><a href="#program" class="hover:text-blue-600">Program</a></li>
            <li><a href="#berita" class="hover:text-blue-600">Berita</a></li>
            <li><a href="#gallery" class="hover:text-blue-600">Galeri</a></li>
        </ul>

        <a href="#contact" class="bg-blue-600 text-white px-5 py-2 rounded-lg">
            Kontak
        </a>
    </div>
</nav>

<!-- HERO -->
<section id="beranda" class="relative h-screen flex items-center justify-center text-white">
    <img src="{{ asset('images/dummy.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-blue-900/70"></div>

    <div class="relative text-center px-6">
        <span class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm mb-4">
            Sekolah Menengah Kejuruan Unggulan
        </span>

        <h1 class="text-4xl md:text-6xl font-bold mt-4">
            SMK NUSANTARA
        </h1>

        <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">
            Membentuk generasi cerdas, berkarakter, dan berdaya saing global
        </p>

        <div class="flex w-full max-w-2xl mx-auto bg-white rounded-full shadow-md overflow-hidden">
    
    <!-- INPUT + ICON -->
    <div class="relative flex-1">
        <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-5 h-5 text-gray-400"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor"
                 stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>

        <input 
            type="text"
            placeholder="Apa yang ingin Anda cari?"
            class="w-full pl-12 pr-4 py-4 outline-none"
        >
    </div>

    <!-- BUTTON -->
    <button class="bg-yellow-400 px-8 text-black font-semibold">
        Cari
    </button>
</div>

    </div>
</section>

<!-- INFO CARDS -->
<section class="relative -my-24 z-10">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-6">

        <!-- Lokasi -->
        <div class="bg-white rounded-xl shadow p-6 flex gap-4">
            <div class="bg-blue-100 mb-4 p-3 rounded-lg">
                <!-- Location SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 22s8-4.438 8-13a8 8 0 10-16 0c0 8.562 8 13 8 13z"/>
                </svg>
            </div>
            <div>
                <h3 class="font-bold">Lokasi Sekolah</h3>
                <p class="text-sm text-gray-600">
                    Jl. Pendidikan No. 123<br>
                    Jakarta Pusat
                </p>
            </div>
        </div>

        <!-- Kontak -->
        <div class="bg-white rounded-xl shadow p-6 flex gap-4">
            <div class="bg-green-100 mb-4 p-3 rounded-lg">
                <!-- Phone SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 5a2 2 0 012-2h3l2 5-3 2a16 16 0 007 7l2-3 5 2v3a2 2 0 01-2 2A18 18 0 013 5z"/>
                </svg>
            </div>
            <div>
                <h3 class="font-bold">Kontak</h3>
                <p class="text-sm text-gray-600">
                    (021) 1234-5678<br>
                    0812-3456-7890
                </p>
            </div>
        </div>

        <!-- Email -->
        <div class="bg-white rounded-xl shadow p-6 flex gap-4">
            <div class="bg-purple-100 mb-4 p-3 rounded-lg">
                <!-- Mail SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18V8H3v8z"/>
                </svg>
            </div>
            <div>
                <h3 class="font-bold">Email</h3>
                <p class="text-sm text-gray-600">
                    info@smknusantara.sch.id
                </p>
            </div>
        </div>

    </div>
</section>

<!-- TENTANG SEKOLAH -->
<section id="about" class="py-40 mt-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- Gambar Kiri -->
            <div class="w-full">
                <img 
                    src="{{ asset('images/dummy.jpg') }}" 
                    alt="Tentang Sekolah"
                    class="rounded-2xl shadow-lg w-full object-cover"
                >
            </div>

            <!-- Konten Kanan -->
            <div>
                <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-medium mb-4">Tentang Sekolah</span>
                <h2 class="text-4xl font-bold text-gray-900 leading-tight mb-6">
        Sekolah Terbaik untuk
        <span class="text-blue-600">Masa Depan</span> Cemerlang
    </h2>
                <p class="text-gray-600 mb-8">
                    SMK Nusantara merupakan sekolah yang berkomitmen mencetak generasi
                    unggul, berkarakter, dan siap menghadapi tantangan masa depan.
                </p>

                <!-- Grid Visi, Misi, Prestasi, Karakter -->
                <div class="grid sm:grid-cols-2 gap-6">

                    <!-- Visi -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="bg-blue-100 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-blue-600"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7
                                        -1.274 4.057-5.064 7-9.542 7
                                        -4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900">Visi</h3>
                        </div>
                        <p class="text-gray-600 text-sm">
                            Menjadi sekolah unggulan yang berprestasi dan berakhlak mulia.
                        </p>
                    </div>

                    <!-- Misi -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="bg-green-100 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-green-600"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 22C6.477 22 2 17.523 2 12
                                        2 6.477 6.477 2 12 2
                                        s10 4.477 10 10
                                        -4.477 10-10 10z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900">Misi</h3>
                        </div>
                        <p class="text-gray-600 text-sm">
                            Menyelenggarakan pendidikan berkualitas dan berorientasi karakter.
                        </p>
                    </div>

                    <!-- Prestasi -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="bg-yellow-100 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-yellow-600"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 21h8M12 17v4M7 4h10v4a5 5 0 01-10 0V4z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900">Prestasi</h3>
                        </div>
                        <p class="text-gray-600 text-sm">
                            Meraih berbagai prestasi akademik dan non-akademik tingkat nasional.
                        </p>
                    </div>

                    <!-- Karakter -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="bg-purple-100 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-purple-600"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.121 17.804A13.937 13.937 0 0112 16
                                        c2.5 0 4.847.655 6.879 1.804" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 2a10 10 0 100 20 10 10 0 000-20z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900">Karakter</h3>
                        </div>
                        <p class="text-gray-600 text-sm">
                            Menanamkan nilai disiplin, tanggung jawab, dan kepemimpinan.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section id="program" class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <!-- BADGE -->
    <div class="flex justify-center mb-4">
      <span class="px-4 py-2 text-sm text-blue-600 bg-blue-100 rounded-full">
        Program Unggulan
      </span>
    </div>

    <!-- TITLE -->
    <h2 class="text-4xl font-bold text-center mb-4">
      Program <span class="text-blue-600">Pendidikan</span> Berkualitas
    </h2>

    <!-- DESC -->
    <p class="text-center text-gray-600 max-w-3xl mx-auto mb-16">
      Kami menyediakan berbagai program pendidikan yang dirancang untuk mengembangkan
      potensi siswa secara menyeluruh, baik akademik maupun non-akademik.
    </p>

    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- CARD 1 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
        <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-xl mb-6">
          <!-- microscope -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-blue-600" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M19 11l-6 6m0 0l-6-6m6 6V3" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-3">Program MIPA</h3>
        <p class="text-gray-600">
          Fokus pada Matematika dan Ilmu Pengetahuan Alam dengan laboratorium lengkap dan modern.
        </p>
      </div>

      <!-- CARD 2 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
        <div class="w-14 h-14 flex items-center justify-center bg-cyan-100 rounded-xl mb-6">
          <!-- globe -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-cyan-600" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10" />
            <path d="M2 12h20M12 2a15 15 0 010 20M12 2a15 15 0 000 20" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-3">Program IPS</h3>
        <p class="text-gray-600">
          Mempelajari ilmu sosial dengan metode pembelajaran yang interaktif dan aplikatif.
        </p>
      </div>

      <!-- CARD 3 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
        <div class="w-14 h-14 flex items-center justify-center bg-sky-100 rounded-xl mb-6">
          <!-- calculator -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-sky-600" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <rect x="4" y="2" width="16" height="20" rx="2" />
            <path d="M8 6h8M8 10h8M8 14h2M14 14h2M8 18h2M14 18h2" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-3">Kelas Olimpiade</h3>
        <p class="text-gray-600">
          Program khusus untuk siswa berprestasi dengan pembimbingan intensif.
        </p>
      </div>

      <!-- CARD 4 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
        <div class="w-14 h-14 flex items-center justify-center bg-indigo-100 rounded-xl mb-6">
          <!-- palette -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-indigo-600" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M12 3a9 9 0 100 18 4 4 0 000-8h-1" />
            <circle cx="8" cy="10" r="1" />
            <circle cx="12" cy="7" r="1" />
            <circle cx="16" cy="10" r="1" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-3">Ekstrakurikuler Seni</h3>
        <p class="text-gray-600">
          Berbagai pilihan seni termasuk musik, tari, teater, dan seni rupa.
        </p>
      </div>

      <!-- CARD 5 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
        <div class="w-14 h-14 flex items-center justify-center bg-emerald-100 rounded-xl mb-6">
          <!-- trophy -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-emerald-600" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M8 21h8M12 17v4M5 4h14v3a7 7 0 01-14 0V4z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-3">Program Olahraga</h3>
        <p class="text-gray-600">
          Fasilitas olahraga lengkap dengan pelatih profesional untuk berbagai cabang.
        </p>
      </div>

      <!-- CARD 6 -->
      <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
        <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-xl mb-6">
          <!-- music -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-blue-600" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M9 18V5l12-2v13" />
            <circle cx="6" cy="18" r="3" />
            <circle cx="18" cy="16" r="3" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-3">Program Bahasa</h3>
        <p class="text-gray-600">
          Penguasaan bahasa asing (Inggris, Mandarin, Arab) dengan native speaker.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- Section Berita -->
  <section id="berita" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
     <div class="flex justify-center mb-4">
            <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-medium">
                Berita Sekolah
            </span>
        </div>

    <!-- HEADING -->
    <div class="text-center mb-14">
      <h2 class="text-4xl font-bold text-gray-900">
        Kabar <span class="text-blue-600">Terbaru</span> dari Sekolah
      </h2>
      <p class="mt-4 text-gray-500">
        Ikuti perkembangan dan berbagai kegiatan terkini di SMA Nusantara.
      </p>
    </div>

    <!-- GRID BERITA -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- CARD -->
      <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">
        
        <!-- IMAGE -->
        <div class="relative overflow-hidden">
          <img src="{{ asset('images/dummy.jpg') }}"
               class="w-full h-56 object-cover group-hover:scale-105 transition duration-300">

          <!-- TAG -->
          <span class="absolute top-4 left-4 bg-blue-600 text-white text-sm px-4 py-1 rounded-full">
            Prestasi
          </span>
        </div>

        <!-- CONTENT -->
        <div class="p-6">
          <div class="flex items-center text-sm text-gray-400 gap-4 mb-3">
            <span class="flex items-center gap-1">
              📅 20 Januari 2026
            </span>
            <span class="flex items-center gap-1">
              ⏱ 5 menit
            </span>
          </div>

          <h3 class="text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition">
            Siswa SMK Nusantara Raih Medali Emas Olimpiade Komputer Nasional
          </h3>

          <p class="mt-3 text-gray-500 text-sm leading-relaxed">
            Tim Olimpiade Sains dari SMK Nusantara berhasil meraih 3 medali emas dan 2 medali perak dalam kompetisi Olimpiade Komputer tingkat nasional.
          </p>

          <a href="#" class="inline-flex items-center gap-2 mt-5 text-blue-600 font-medium hover:gap-3 transition">
            Baca Selengkapnya
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor"
                 stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- DUPLIKASI CARD (UBAH ISI GAMBAR & TEKS) -->
      <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">
        <div class="relative overflow-hidden">
          <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f"
               class="w-full h-56 object-cover group-hover:scale-105 transition duration-300">
          <span class="absolute top-4 left-4 bg-blue-600 text-white text-sm px-4 py-1 rounded-full">
            Fasilitas
          </span>
        </div>

        <div class="p-6">
          <div class="flex items-center text-sm text-gray-400 gap-4 mb-3">
            <span>📅 15 Januari 2026</span>
            <span>⏱ 4 menit</span>
          </div>

          <h3 class="text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition">
            Peresmian Laboratorium Komputer dan Robotika Modern
          </h3>

          <p class="mt-3 text-gray-500 text-sm">
            SMA Nusantara meresmikan fasilitas laboratorium komputer dan robotika dengan peralatan terkini.
          </p>

          <a href="#" class="inline-flex items-center gap-2 mt-5 text-blue-600 font-medium hover:gap-3 transition">
            Baca Selengkapnya
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor"
                 stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>

      <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">
        <div class="relative overflow-hidden">
          <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b"
               class="w-full h-56 object-cover group-hover:scale-105 transition duration-300">
          <span class="absolute top-4 left-4 bg-blue-600 text-white text-sm px-4 py-1 rounded-full">
            Program
          </span>
        </div>

        <div class="p-6">
          <div class="flex items-center text-sm text-gray-400 gap-4 mb-3">
            <span>📅 10 Januari 2026</span>
            <span>⏱ 3 menit</span>
          </div>

          <h3 class="text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition">
            Program Pertukaran Pelajar ke Jepang Dibuka
          </h3>

          <p class="mt-3 text-gray-500 text-sm">
            Kesempatan emas bagi siswa berprestasi untuk mengikuti program pertukaran pelajar ke Jepang selama 3 bulan.
          </p>

          <a href="#" class="inline-flex items-center gap-2 mt-5 text-blue-600 font-medium hover:gap-3 transition">
            Baca Selengkapnya
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor"
                 stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SECTION GALERI -->
<section id="gallery" class="py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <!-- BADGE -->
        <div class="flex justify-center mb-4">
            <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-medium">
                Galeri Foto
            </span>
        </div>

        <!-- TITLE -->
        <h2 class="text-center text-4xl font-bold text-gray-900">
            Dokumentasi <span class="text-blue-600">Kegiatan</span> Sekolah
        </h2>

        <!-- SUBTITLE -->
        <p class="text-center mt-4 text-gray-600 max-w-2xl mx-auto">
            Lihat berbagai kegiatan dan fasilitas yang ada di SMA Nusantara.
        </p>

        <!-- GRID -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">

            <!-- ITEM 1 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md h-64">
                <img src="{{ asset('images/Simga.jpg') }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                     alt="Akademik">

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-300"></div>

                <span class="absolute top-4 left-4 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                    Akademik
                </span>

                <div class="absolute bottom-4 left-4 right-4 text-white opacity-0
                            group-hover:opacity-100 transition duration-300">
                    <h3 class="font-semibold text-lg">Kegiatan Belajar</h3>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md h-64">
                <img src="{{ asset('images/Simga.jpg') }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                     alt="Fasilitas">

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-300"></div>

                <span class="absolute top-4 left-4 bg-green-600 text-white text-xs px-3 py-1 rounded-full">
                    Fasilitas
                </span>

                <div class="absolute bottom-4 left-4 right-4 text-white opacity-0
                            group-hover:opacity-100 transition duration-300">
                    <h3 class="font-semibold text-lg">Laboratorium</h3>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md h-64">
                <img src="{{ asset('images/Simga.jpg') }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                     alt="Olahraga">

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-300"></div>

                <span class="absolute top-4 left-4 bg-yellow-500 text-white text-xs px-3 py-1 rounded-full">
                    Olahraga
                </span>

                <div class="absolute bottom-4 left-4 right-4 text-white opacity-0
                            group-hover:opacity-100 transition duration-300">
                    <h3 class="font-semibold text-lg">Ekstrakurikuler</h3>
                </div>
            </div>

            <!-- ITEM 4 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md h-64">
                <img src="{{ asset('images/Simga.jpg') }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                     alt="Perpustakaan">

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-300"></div>

                <span class="absolute top-4 left-4 bg-purple-600 text-white text-xs px-3 py-1 rounded-full">
                    Perpustakaan
                </span>

                <div class="absolute bottom-4 left-4 right-4 text-white opacity-0
                            group-hover:opacity-100 transition duration-300">
                    <h3 class="font-semibold text-lg">Ruang Baca</h3>
                </div>
            </div>

            <!-- ITEM 5 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md h-64">
                <img src="{{ asset('images/Simga.jpg') }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                     alt="Upacara">

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-300"></div>

                <span class="absolute top-4 left-4 bg-red-600 text-white text-xs px-3 py-1 rounded-full">
                    Kegiatan
                </span>

                <div class="absolute bottom-4 left-4 right-4 text-white opacity-0
                            group-hover:opacity-100 transition duration-300">
                    <h3 class="font-semibold text-lg">Upacara Sekolah</h3>
                </div>
            </div>

            <!-- ITEM 6 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md h-64">
                <img src="{{ asset('images/Simga.jpg') }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                     alt="Prestasi">

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-300"></div>

                <span class="absolute top-4 left-4 bg-indigo-600 text-white text-xs px-3 py-1 rounded-full">
                    Prestasi
                </span>

                <div class="absolute bottom-4 left-4 right-4 text-white opacity-0
                            group-hover:opacity-100 transition duration-300">
                    <h3 class="font-semibold text-lg">Penghargaan</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Badge -->
        <div class="flex justify-center mb-4">
            <span class="bg-blue-100 text-blue-600 px-5 py-2 rounded-full text-sm font-medium">
                Hubungi Kami
            </span>
        </div>

        <!-- Heading -->
        <h2 class="text-4xl font-bold text-center text-gray-900">
            Ada Pertanyaan? <span class="text-blue-600">Hubungi</span> Kami
        </h2>

        <p class="text-center text-gray-600 mt-4 max-w-2xl mx-auto">
            Tim kami siap membantu menjawab pertanyaan Anda tentang pendaftaran,
            program, atau informasi lainnya.
        </p>

        <!-- Content -->
        <div class="grid lg:grid-cols-2 gap-12 mt-16 items-start">

            <!-- FORM -->
            <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-2xl shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-6">Kirim Pesan</h3>

                <form class="space-y-5">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-sm text-gray-600">Nama Depan</label>
                            <input type="text" placeholder="John"
                                class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div>
                            <label class="text-sm text-gray-600">Nama Belakang</label>
                            <input type="text" placeholder="Doe"
                                class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Email</label>
                        <input type="email" placeholder="john@example.com"
                            class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Nomor Telepon</label>
                        <input type="text" placeholder="0812-3456-7890"
                            class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Pesan</label>
                        <textarea rows="5" placeholder="Tulis pesan Anda di sini..."
                            class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                    </div>

                    <button
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 rounded-xl transition">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- INFO KONTAK -->
            <div class="space-y-8">

                <h3 class="text-xl font-semibold text-gray-900">Informasi Kontak</h3>

                <!-- Item -->
                <div class="flex gap-4">
                    <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center">
                        <!-- Location SVG -->
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 11a3 3 0 100-6 3 3 0 000 6z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 11c0 7-7.5 11-7.5 11S4.5 18 4.5 11a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Alamat</h4>
                        <p class="text-gray-600 text-sm">
                            Jl. Pendidikan No. 123, Menteng,<br>
                            Jakarta Pusat, DKI Jakarta 10310
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center">
                        <!-- Phone SVG -->
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h3l2 5-2 1a11 11 0 005 5l1-2 5 2v3a2 2 0 01-2 2A16 16 0 013 5z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Telepon</h4>
                        <p class="text-gray-600 text-sm">
                            (021) 1234-5678<br>
                            0812-3456-7890
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center">
                        <!-- Email SVG -->
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l9 6 9-6M3 8v8a2 2 0 002 2h14a2 2 0 002-2V8" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Email</h4>
                        <p class="text-gray-600 text-sm">
                            info@smknusantara.sch.id<br>
                            admin@smknusantara.sch.id
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center">
                        <!-- Clock SVG -->
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6l4 2M12 22a10 10 0 100-20 10 10 0 000 20z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Jam Operasional</h4>
                        <p class="text-gray-600 text-sm">
                            Senin - Jumat: 07.00 - 16.00 WIB<br>
                            Sabtu: 07.00 - 12.00 WIB
                        </p>
                    </div>
                </div>

                <!-- Social Media -->
                <div>
                    <h4 class="font-semibold text-gray-900 mb-3">Ikuti Kami</h4>
                    <div class="flex gap-4">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-xl transition">
                            f
                        </a>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-xl transition">
                            ig
                        </a>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-xl transition">
                            yt
                        </a>
                    </div>
                </div>

                <!-- MAP -->
                <div class="mt-6">
                    <div class="w-full h-60 bg-gray-200 rounded-2xl flex items-center justify-center text-gray-500">
                        Google Maps
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-gradient-to-b from-slate-900 to-slate-950 text-gray-300 pt-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Top -->
        <div class="grid gap-12 lg:grid-cols-4">

            <!-- Brand -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-blue-600 p-2 rounded-xl">
                        <!-- Graduation SVG -->
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3l9 5-9 5-9-5 9-5z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 10v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6" />
                        </svg>
                    </div>
                    <h3 class="text-white text-lg font-semibold">SMK Nusantara</h3>
                </div>

                <p class="text-sm leading-relaxed text-gray-400">
                    Membentuk generasi cerdas dan berakhlak mulia
                    untuk masa depan Indonesia yang lebih baik.
                </p>

                <!-- Social -->
                <div class="flex gap-3 mt-6">
                    <a href="#" class="bg-white/10 hover:bg-blue-600 p-3 rounded-xl transition">
                        f
                    </a>
                    <a href="#" class="bg-white/10 hover:bg-blue-600 p-3 rounded-xl transition">
                        ig
                    </a>
                    <a href="#" class="bg-white/10 hover:bg-blue-600 p-3 rounded-xl transition">
                        yt
                    </a>
                    <a href="#" class="bg-white/10 hover:bg-blue-600 p-3 rounded-xl transition">
                        x
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold mb-4">Tautan Cepat</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#" class="hover:text-blue-400 transition">Beranda</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Program</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Berita</a></li>
                </ul>
            </div>

            <!-- Program -->
            <div>
                <h4 class="text-white font-semibold mb-4">Program</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#" class="hover:text-blue-400 transition">Program MIPA</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Program IPS</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Kelas Olimpiade</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Ekstrakurikuler</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-4">Kontak</h4>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li>
                        Jl. Pendidikan No. 123<br>
                        Jakarta Pusat, 10310
                    </li>
                    <li>(021) 1234-5678</li>
                    <li>info@smknusantara.sch.id</li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-white/10 mt-16"></div>

        <!-- Bottom -->
        <div class="py-6 text-center text-sm text-gray-400">
            © 2026 <span class="text-white">SMK Nusantara</span>. All rights reserved.
        </div>

    </div>
</footer>
<script>
    AOS.init();
</script>

</body>
</html>