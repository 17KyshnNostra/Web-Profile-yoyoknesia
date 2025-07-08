@props(['portofolios' => []])

<div class="container mx-auto px-4 py-8">
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Video Showcase</h1>
        <p class="text-gray-600 text-lg">Experience our interactive video content</p>
    </div>

    <!-- Video Grid Layout -->
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
</div>
