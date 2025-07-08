<!--slider-->
@props(['portofolios' => []])
<section class="text-black min-h-screen">
    <div class="text-center py-12 px-4">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            Naikkan tingkat <span class="text-Black font-bold">Branding Bisnis</span> anda <br>
            bersama kami <span class="text-blue-700 font-bold">#YoyoknesiaInAja</span>
        </h1>
        <p class="mt-4 text-sm max-w-3xl mx-auto">
            Anak Muda Jogja dengan Creativitas serta Team Profesional, kami siap membantu Jasa pembuatan Video Company
            Profile | Web Series Video | Dokumentasi Foto Video untuk Mice Wisata Gathaering | TVC | Kampanye Digital,
            Instagram Tiktok Creator | Video Program CSR | Safety Induction Video | Branding dan Berbagai Strategi
            Digital | Video Clip | Prewedding | Wedding Clip | Sport | Aerial Videography dan lainnya
        </p>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
            @forelse($portofolios as $item)
                <div class="mb-4 break-inside-avoid rounded-2xl overflow-hidden shadow-xl bg-white">
                    @php
                        $ext = pathinfo($item->media, PATHINFO_EXTENSION);
                    @endphp
                    @if(in_array($ext, ['mp4', 'webm', 'mov']))
                        <video controls class="w-full h-auto object-cover">
                            <source src="{{ asset('storage/'.$item->media) }}">
                            Browser tidak mendukung video.
                        </video>
                    @else
                        <img src="{{ asset('storage/'.$item->media) }}" class="w-full h-auto object-cover">
                    @endif
                </div>
            @empty
                <div class="text-center text-gray-500 py-8 col-span-full">Belum ada portofolio.</div>
            @endforelse
        </div>
    </div>
    
    
</section>
