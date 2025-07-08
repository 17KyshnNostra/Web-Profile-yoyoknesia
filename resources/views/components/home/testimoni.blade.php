{{-- Testimonial --}}
<section class="bg-gray-100 w-full py-12 px-4 sm:px-6 lg:px-8 text-center rounded-3xl max-w-6xl mx-auto">
  <h4 class="text-sm text-gray-500 font-medium">Testimonial</h4>
  <h2 class="text-3xl md:text-4xl font-bold mt-2">
    <span class="text-blue-500">Yang mereka</span> <br>
    <span class="text-gray-800">Katakan terkait kami.</span>
  </h2>
  <p class="text-gray-500 mt-4 max-w-xl mx-auto">
    Kepuasan anda adalah prioritas utama kami, berikut ini adalah kumpulan para pelanggan kami.
  </p>

  <!-- Slider -->
  <div class="relative mt-10">
    <div id="testimonial-slider" class="overflow-hidden">
      <div id="testimonial-slides" class="flex transition-transform duration-500" style="transform: translateX(0%)">
        <!-- Slide 1 -->
        <div class="min-w-full px-4">
          <div class="bg-white p-6 rounded-2xl shadow-md max-w-xl mx-auto">
            <p class="text-gray-700 mb-4">"Pelayanan sangat ramah dan cepat. Saya sangat puas bekerja sama dengan tim ini!"</p>
            <h5 class="font-semibold text-blue-500">Andi Pratama</h5>
            <span class="text-sm text-gray-400">CEO PT. Maju Jaya</span>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="min-w-full px-4">
          <div class="bg-white p-6 rounded-2xl shadow-md max-w-xl mx-auto">
            <p class="text-gray-700 mb-4">"Sungguh pengalaman yang luar biasa, kualitas kerja mereka di atas ekspektasi."</p>
            <h5 class="font-semibold text-blue-500">Siti Rahma</h5>
            <span class="text-sm text-gray-400">Founder Kreativa</span>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="min-w-full px-4">
          <div class="bg-white p-6 rounded-2xl shadow-md max-w-xl mx-auto">
            <p class="text-gray-700 mb-4">"Kami akan terus menggunakan layanan mereka, karena hasilnya selalu memuaskan."</p>
            <h5 class="font-semibold text-blue-500">Dewi Kencana</h5>
            <span class="text-sm text-gray-400">Marketing Lead, Komunika</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Buttons -->
    <div class="flex justify-center mt-6 space-x-4">
      <button id="prevBtn" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full">
        Prev
      </button>
      <button id="nextBtn" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full">
        Next
      </button>
    </div>
  </div>

  <!-- Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slider = document.getElementById('testimonial-slides');
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');
      let currentSlide = 0;
      const totalSlides = slider.children.length;

      function updateSlide() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
      }

      prevBtn.addEventListener('click', () => {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlide();
      });

      nextBtn.addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlide();
      });

      // Autoplay every 3 seconds
      setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlide();
      }, 3000);
    });
  </script>
</section>
