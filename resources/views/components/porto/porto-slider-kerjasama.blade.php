<div class="logo-container">
    <div class="container mx-auto px-4">
        <div class="title-section">
            <h1 class="main-title">{{ $title ?? 'Partner & Instansi' }}</h1>
            <p class="subtitle">{{ $subtitle ?? 'Bekerjasama dengan berbagai lembaga terpercaya' }}</p>
        </div>
        
        <div class="slider-wrapper mx-auto">
            <div id="logo-carousel" class="relative" data-carousel="slide">
                <div class="relative h-60 overflow-hidden rounded-lg">
                    
                    <!-- Slide 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 p-6">
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/kemendikbud.png') }}" alt="Kemendikbud" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">KEMENDIKBUD</div>
                            </div>
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/kemenkes.png') }}" alt="Kemenkes" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">KEMENKES</div>
                            </div>
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/polri.png') }}" alt="Polri" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">POLRI</div>
                            </div>
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/tni.png') }}" alt="TNI" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">TNI</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 p-6">
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/bumn.png') }}" alt="BUMN" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">BUMN</div>
                            </div>
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/pemda.png') }}" alt="Pemda" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">PEMDA</div>
                            </div>
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/bi.png') }}" alt="Bank Indonesia" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">BANK RI</div>
                            </div>
                            <div class="logo-item">
                                <img src="{{ asset('img/logos/pertaminalogo.jpg') }}" alt="Pertamina" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">Pertamina</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 p-6">
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/universitas.png') }}" alt="Universitas" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">UNIVERSITAS</div>
                            </div>
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/rs.png') }}" alt="Rumah Sakit" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">RUMAH SAKIT</div>
                            </div>
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/dinas.png') }}" alt="Dinas" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">DINAS</div>
                            </div>
                            <div class="logo-item">
                                <img src="{{ asset('images/logos/korporasi.png') }}" alt="Korporasi" class="logo-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="logo-placeholder" style="display: none;">KORPORASI</div>
                        </div>
                    </div>
                </div>
                
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
            </div>
        </div>
    </div>
</div>