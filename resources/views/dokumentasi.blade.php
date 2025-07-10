@extends('layout.app')

@section('content')
    {{-- <x-services.services-hero/>
    <x-home.services-dokumentasi :layanans="$layanans"/>
    <x-home.banner/>
    <x-services.services-contact/> --}}
    <section class="bg-gray-100 min-h-screen">
        <div class="max-w-5xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <img src="{{ asset('img/gambar2.jpg') }}" alt="polisi"
                            class="rounded-xl shadow-md object-cover w-full h-60 transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                    </div>
                </div>
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-blue-600 leading-tight">
                        Jasa Video<br>
                        <span class="text-black">Wedding</span>
                        <span class="text-black">& Engagagement</span>
                    </h1>
                    <p class="mt-6 text-gray-700 text-lg">
                        Kami menyediakan jasa video profesional untuk mendokumentasikan momen pernikahan dan pertunangan
                        Anda. Dengan sentuhan sinematik dan storytelling, setiap emosi dan detail akan diabadikan dengan
                        penuh makna dan keindahan.
                    </p>
                </div>
            </div>
        </div>
    
        <!-- Cards -->
        <div class="max-w-5xl mx-auto px-6 py-12">
            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($layanans as $layanan)
                    <div class="bg-white rounded-xl shadow p-6 flex flex-col justify-between border">
                        <div>
                            <h3 class="text-lg font-bold mb-2">{{ $layanan->nama }}</h3>
                            <div class="text-sm text-gray-600 mb-4 richeditor-content">
                                {!! $layanan->deskripsi !!}
                            </div>
                            @if ($layanan->icon)
                                <img src="{{ asset('storage/' . $layanan->icon) }}" alt="{{ $layanan->nama }}"
                                    class="w-16 h-16 object-contain mb-4 rounded" />
                            @endif
                        </div>
                        <div class="mt-6">
                            <p class="text-lg font-semibold text-gray-900 mb-2">
                                Mulai dari <span class="text-blue-600">{{ $layanan->harga_rp }}</span>
                            </p>
                            <a href="{{ route('booking.form', ['layanan' => $layanan->id]) }}"
                                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full text-center block">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center text-gray-400">Belum ada layanan tersedia.</div>
                @endforelse
            </div>
        </div>
    </section>
@endsection