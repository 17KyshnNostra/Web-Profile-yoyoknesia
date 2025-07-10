<!--Hire me-->
<section class="p-10 max-w-6xl mx-auto mt-20">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-10 md:space-y-0">
      <!-- Ilustrasi -->
      <div class="md:w-1/3">
        <img src="{{ asset('img/Property 1.png') }}" alt="Illustration" class="w-full max-w-sm mx-auto">
      </div>

      <!-- Konten -->
      <div class="md:w-2/3 text-center md:text-left">
        <h2 class="text-4xl font-bold text-gray-800">
          Why <span class="text-blue-600">Hire me ?</span>
        </h2>

        <p class="text-gray-500 mt-4 leading-relaxed">
          Di Yoyoknesia, kami tidak hanya merekam momen—kami menghidupkannya.
          Dengan pengalaman di dunia videografi kreatif, kami menggabungkan storytelling
          yang kuat dengan visual yang sinematik untuk menghadirkan video yang bukan hanya terlihat bagus,
          tapi juga terasa bermakna.
        </p>

        <!-- Statistik -->
        <div class="flex flex-col sm:flex-row justify-center md:justify-start mt-8 gap-10">
          <div>
            <p class="text-3xl font-semibold text-gray-800">450++</p>
            <p class="text-gray-500 text-sm">Project Completed</p>
          </div>
        </div>

        <!-- Tombol -->
        <div class="mt-8">
          @php
          $text = rawurlencode("Halo admin, saya ingin bertanya mengenai layanan videografi yang tersedia di Yoyoknesia. Mohon informasinya ya. Terima kasih.");
          @endphp
          <a href="https://wa.me/6281297706081?text={{ $text }}"
          target="_blank" rel="noopener noreferrer" class="inline-block px-6 py-2 border border-gray-800 rounded-full font-medium hover:bg-gray-800 hover:text-white transition">
            Hire me
          </a>
        </div>
      </div>
    </div>
  </section>