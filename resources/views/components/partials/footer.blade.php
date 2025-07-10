<!-- Footer -->
<footer class="bg-white dark:bg-gray-900">
  <div class="mx-auto w-full max-w-screen-xl px-4 py-6 sm:px-6 lg:py-8">
    <!-- Konten Utama Footer -->
    <div class="flex flex-col md:flex-row md:justify-between gap-8">
      
      <!-- Brand dan Deskripsi -->
      <div class="flex-1">
        <a href="/" class="flex items-center mb-4">
          <img src="{{ asset('img/yoyonesia.png') }}" class="h-8 me-3" alt="Yoyoknesia Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Yoyoknesia</span>
        </a>
        <p class="text-sm text-gray-500 dark:text-gray-400">Punya ide atau momen spesial yang ingin diabadikan?</p>
        <p class="text-sm text-gray-500 dark:text-gray-400">Yuk, ngobrol langsung lewat WhatsApp atau cek karya kami di Instagram!</p>
      </div>

      <!-- Navigasi dan Sosial Media -->
      <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
        
        <!-- Navigasi -->
        <div>
          <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Navigation</h2>
          <ul class="text-gray-500 dark:text-gray-400 text-sm space-y-2">
            <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
            <li><a href="{{ route('dokumentasi') }}" class="hover:underline">Services</a></li>
            <li><a href="{{ route('porto') }}" class="hover:underline">Portofolio</a></li>
            <li><a href="{{ route('tracking.form') }}" class="hover:underline">Tracking</a></li>
            <li><a href="{{ route('about-us') }}" class="hover:underline">About Us</a></li>
          </ul>
        </div>

        <!-- Sosial Media -->
        <div>
          <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow Us</h2>
          <ul class="text-gray-500 dark:text-gray-400 text-sm space-y-2">
            <li><a href="https://instagram.com/yoyoknesia" target="_blank" class="hover:underline">Instagram</a></li>
            @php
            $text = rawurlencode("Halo admin, saya ingin bertanya mengenai layanan videografi yang tersedia di Yoyoknesia. Mohon informasinya ya. Terima kasih.");
            @endphp

            <li>
              <a href="https://wa.me/6281297706081?text={{ $text }}"
                target="_blank" rel="noopener noreferrer"
                class="hover:underline">
                Whatsapp
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>

    <!-- Garis Bawah -->
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700" />

    <!-- Copyright & Icons -->
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center text-sm text-gray-500 dark:text-gray-400">
      <span class="text-center sm:text-left">© 2025 <a href="/" class="hover:underline">Yoyoknesia™</a>. All Rights Reserved.</span>

      <!-- Ikon Sosial Media -->
      <div class="flex justify-center sm:justify-end mt-4 sm:mt-0 space-x-5">
        
        <!-- WhatsApp -->
        <a href="https://wa.me/6281297706081?text=Halo%20admin%2C%20saya%20ingin%20bertanya%20mengenai%20layanan%20videografi%20yang%20tersedia.%20Mohon%20informasinya%20ya.%20Terima%20kasih."
          target="_blank" rel="noopener noreferrer"
          class="hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                <path d="M16.001 2.667c-7.364 0-13.333 5.97-13.333 13.333 0 2.364.628 4.672 1.818 6.696L2.667 29.333l6.898-1.79c1.9 1.044 4.038 1.59 6.436 1.59 7.364 0 13.333-5.97 13.333-13.333S23.365 2.667 16.001 2.667zm0 24c-2.014 0-3.939-.538-5.63-1.55l-.403-.24-4.1 1.064 1.102-4.01-.261-.415a10.6 10.6 0 0 1-1.65-5.674c0-5.882 4.785-10.667 10.667-10.667s10.667 4.785 10.667 10.667S21.883 26.667 16.001 26.667zm5.448-7.24c-.299-.15-1.77-.873-2.046-.974-.276-.102-.478-.15-.68.15-.203.299-.779.974-.954 1.172-.176.203-.352.226-.65.075-.299-.15-1.264-.466-2.406-1.485-.889-.79-1.49-1.764-1.664-2.063-.174-.299-.018-.461.131-.61.135-.134.299-.35.449-.524.15-.174.199-.299.299-.498.1-.199.05-.374-.025-.523-.075-.15-.68-1.638-.93-2.246-.244-.586-.493-.506-.68-.516l-.58-.01a1.118 1.118 0 0 0-.809.375c-.276.299-1.057 1.032-1.057 2.516 0 1.485 1.08 2.92 1.23 3.12.15.199 2.126 3.25 5.155 4.557.72.31 1.281.495 1.72.634.723.23 1.38.198 1.9.12.58-.086 1.77-.722 2.021-1.419.25-.698.25-1.296.176-1.42-.074-.124-.273-.199-.571-.348z"/>
            </svg>
            <span class="sr-only">WhatsApp</span>
        </a>


        <!-- Instagram -->
        <a href="https://instagram.com/yoyoknesia" target="_blank" rel="noopener noreferrer" class="hover:text-gray-900 dark:hover:text-white">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.31.974.975 1.248 2.242 1.31 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.31 3.608-.975.974-2.242 1.248-3.608 1.31-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.31-.974-.975-1.248-2.242-1.31-3.608C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.85c.062-1.366.336-2.633 1.31-3.608.975-.974 2.242-1.248 3.608-1.31C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.735 0 8.332.013 7.052.072 5.775.131 4.548.383 3.516 1.414 2.484 2.446 2.232 3.674 2.173 4.948.113 8.332.1 8.735.1 12c0 3.265.013 3.668.072 4.948.059 1.276.311 2.504 1.343 3.536 1.032 1.032 2.26 1.284 3.536 1.343 1.28.059 1.683.072 4.948.072s3.668-.013 4.948-.072c1.276-.059 2.504-.311 3.536-1.343 1.032-1.032 1.284-2.26 1.343-3.536.059-1.28.072-1.683.072-4.948s-.013-3.668-.072-4.948c-.059-1.276-.311-2.504-1.343-3.536C19.952.383 18.724.131 17.448.072 16.168.013 15.765 0 12.5 0h-1zM12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
          </svg>
          <span class="sr-only">Instagram</span>
        </a>
      </div>
    </div>
  </div>
</footer>