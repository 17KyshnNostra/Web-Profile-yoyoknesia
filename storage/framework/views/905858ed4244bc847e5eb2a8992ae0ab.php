
<nav class="relative z-50 bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  
      
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="<?php echo e(asset('img/yoyonesia.png')); ?>" class="h-8" alt="Yoyoknesia Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Yoyoknesia</span>
      </a>
  
      
      <button data-collapse-toggle="navbar-dropdown" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
  
      
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul
          class="flex flex-col md:flex-row md:gap-x-6 font-medium p-4 md:p-0 mt-4 md:mt-0 border border-gray-100 rounded-lg bg-gray-50 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
  
          
          <li>
            <a href="<?php echo e(route('home')); ?>"
              class="block py-2 md:py-0 text-sm <?php echo e(navClass('home')); ?>">
              Home
            </a>
          </li>
  
          
          <li>
            <a href="<?php echo e(route('dokumentasi')); ?>"
              class="block py-2 md:py-0 text-sm <?php echo e(navClass(['dokumentasi', 'company'])); ?>">
              Services
            </a>
          </li>
  
          
          <li>
            <a href="<?php echo e(route('about-us')); ?>"
              class="block py-2 md:py-0 text-sm <?php echo e(navClass('about-us')); ?>">
              About us
            </a>
          </li>
  
          
          <li>
            <a href="<?php echo e(route('porto')); ?>"
              class="block py-2 md:py-0 text-sm <?php echo e(navClass('porto')); ?>">
              Portofolio
            </a>
          </li>
  
          
          <li>
            <a href="<?php echo e(route('tracking.form')); ?>"
              class="block py-2 md:py-0 text-sm <?php echo e(navClass('tracking.form')); ?>">
              Tracking
            </a>
          </li>
  
          
          <?php
            $text = rawurlencode("Halo admin, saya ingin bertanya mengenai layanan videografi yang tersedia di Yoyoknesia. Mohon informasinya ya. Terima kasih.");
          ?>
          <li>
            <a href="https://wa.me/6282255749407?text=<?php echo e($text); ?>"
              target="_blank" rel="noopener noreferrer"
              class="block py-2 md:py-0 text-sm <?php echo e(navClass('contact')); ?>">
              Contact
            </a>
          </li>
  
        </ul>
      </div>
  
    </div>
  </nav>
  <?php /**PATH C:\Users\A C E R\OneDrive\Documents\MPTI\Yoyoknesia-Yoyonesia-Filament\resources\views/components/partials/header.blade.php ENDPATH**/ ?>