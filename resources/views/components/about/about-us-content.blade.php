<section class="relative py-20 bg-white text-gray-800 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 pattern-bg"></div>
    <div class="absolute top-20 left-10 w-32 h-32 bg-blue-500/10 rounded-full blur-xl floating-animation"></div>
    <div class="absolute bottom-20 right-10 w-40 h-40 bg-blue-500/10 rounded-full blur-xl floating-animation"
        style="animation-delay: 2s;"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-blue-500/5 rounded-full blur-2xl floating-animation"
        style="animation-delay: 4s;"></div>

    <div class="relative z-10 container mx-auto px-6 max-w-7xl">
        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-5xl md:text-6xl font-black mb-6">
                <span class="text-black-600">Siapa Kami?</span>
            </h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full"></div>
            <p class="text-xl text-gray-600 mt-6 max-w-2xl mx-auto">
                Production House kreatif dari Yogyakarta yang siap mewujudkan visi visual Anda
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-16">
            <!-- Logo Section -->
            <div class="lg:col-span-4">
                <div class="glass-card rounded-3xl p-8 shadow-xl text-center card-hover h-full">
                    <div class="mx-auto w-48 h-48 flex items-center justify-center">
                        <div class="w-40 h-40 rounded-xl overflow-hidden">
                            <img src="{{ asset('img/yoyonesia.png') }}" alt="Logo YK"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>
                    <div
                        class="bg-blue-500 text-white py-3 px-6 rounded-full text-base font-bold inline-block shadow-lg">
                        Production House Yogyakarta
                    </div>
                    <p class="text-gray-600 mt-4 text-sm">
                        Sejak 2015 melayani berbagai industri kreatif
                    </p>
                </div>
            </div>

            <!-- Vision & Mission -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Vision -->
                <div class="glass-card rounded-3xl p-8 shadow-xl card-hover">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Visi</h3>
                    </div>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Menjadi partner kreatif terpercaya dalam dunia videografi yang mampu menghadirkan karya visual
                        berkualitas, berkarakter, dan berdampak bagi setiap klien.
                    </p>
                </div>

                <!-- Mission -->
                <div class="glass-card rounded-3xl p-8 shadow-xl card-hover">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Misi</h3>
                    </div>
                    <div class="space-y-3" x-data="{
                        missions: [
                            'Menghadirkan layanan videografi yang profesional, kreatif, dan sesuai kebutuhan klien.',
                            'Membangun storytelling visual yang kuat untuk memperkuat identitas brand atau momen.',
                            'Menjaga kualitas produksi dari pra-produksi hingga editing akhir.',
                            'Terus berinovasi dalam gaya visual dan teknologi.',
                            'Memberikan solusi terbaik di bidang industri kreatif bagi perusahaan, instansi, UMKM, dan personal.'
                        ]
                    }">
                        <template x-for="(mission, index) in missions" :key="index">
                            <div class="flex items-start mission-item">
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center text-black-700 font-bold text-sm mr-4 mt-1 flex-shrink-0">
                                    <span x-text="index + 1"></span>
                                </div>
                                <p x-text="mission" class="text-gray-700 leading-relaxed"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="glass-card rounded-3xl p-8 shadow-xl card-hover">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Tentang Kami</h3>
                    </div>

                    <div class="space-y-6">
                        <p class="text-xl text-gray-700">
                            <strong class="text-blue-600">Anak muda Jogja</strong> dengan kreativitas dan pelayanan
                            profesional siap membantu dalam meningkatkan potensi bisnis Anda.
                        </p>

                        <div class="bg-blue-500 text-white py-4 px-6 rounded-2xl text-center">
                            <p class="text-2xl font-bold">#YoyoknesiaInAja</p>
                        </div>

                        <p class="text-gray-700 leading-relaxed">
                            <strong class="text-blue-600">Yoyoknesia</strong> adalah Production House (PH) yang berbasis
                            di Yogyakarta. Sejak <strong class="text-blue-700">2015</strong>, kami telah membantu
                            perusahaan swasta, BUMN, sekolah, kesehatan, pariwisata, dan UMKM di sektor industri kreatif
                            Indonesia.
                        </p>

                        <blockquote
                            class="text-xl font-medium text-center text-blue-600 border-l-4 border-blue-500 pl-6 italic">
                            "Setiap brand dan momen punya cerita yang layak dikemas dengan visual yang kuat dan
                            mengesankan."
                        </blockquote>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="lg:col-span-1">
                <div class="glass-card rounded-3xl p-8 shadow-xl card-hover">
                    <h4 class="text-xl font-bold text-gray-800 mb-6 text-center">Hubungi Kami</h4>

                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mr-4 mt-1">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Email</p>
                                <a class="text-blue-600 hover:underline">
                                    yoyok9303@gmail.com
                                </a>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mr-4 mt-1">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Telepon</p>
                                <a class="text-blue-600 hover:underline">
                                    +62 812 9770 6081
                                </a>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mr-4 mt-1">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Alamat</p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Jl. Mawar, Tamanan Wetan<br>
                                    Bantul, Yogyakarta 55191
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
