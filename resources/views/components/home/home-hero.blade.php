<!-- Hero Section -->
<section class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/background.jpg') }}');">
    <!-- Overlay hitam transparan -->
    <div class="absolute inset-0 bg-black bg-opacity-60 z-10"></div>
    <!-- Konten -->
    <div class="relative z-10 max-w-5xl mx-auto px-6 py-24 text-white">
      <h2 class="text-xl font-medium mb-2">Yoyoknesia</h2>
      <h1 class="text-5xl md:text-6xl font-bold leading-tight">
        Jasa Video <span class="text-blue-500">Jogja</span><br>profesional.
      </h1>
      <p class="mt-6 text-lg max-w-2xl">
        Yoyoknesia merupakan Rumah Produksi (PH) dan Jasa Foto dan Video Multimedia lainnya. Kami menyediakan perencanaan strategis pemasaran merek lengkap untuk produk dan layanan Anda. 2025 visual yang berbicara, Kampanye Digital, acara Below the Line & berbagai Strategi Digital — serahkan kepada kami.
      </p>

      <div class="flex items-center space-x-6 mb-6">
        <div class="flex items-center space-x-1">
          <span class="text-orange-500 text-xl">★★★★★</span>
        </div>
        <div>
          <h3 class="text-xl font-bold">10 Years</h3>
          <p class="text-white-500 text-sm -mt-1">Experience</p>
        </div>
      </div>
      <div class="mt-8">
        @php
        $text = rawurlencode("Halo admin, saya ingin bertanya mengenai layanan videografi yang tersedia di Yoyoknesia. Mohon informasinya ya. Terima kasih.");
        @endphp
        <a href="https://wa.me/6281297706081?text={{ $text }}"
                target="_blank" rel="noopener noreferrer" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-full font-semibold transition">
          Hubungi Kami
        </a>
      </div>
    </div>
  </section>