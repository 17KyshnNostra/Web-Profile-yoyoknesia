@extends('layout.app')

@section('content')
    <div class="w-full px-4 py-16 bg-transparent">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-xl md:text-3xl font-bold text-gray-600 mb-4">
                Tracking Orders
            </h1>
            <p class="text-sm md:text-base mb-6 text-gray-600">
                Masukkan Kode Booking Untuk Melacak Orderan Anda.
            </p>
        </div>

        <form action="{{ route('tracking.search') }}" method="GET" class="max-w-md mx-auto">
            <div class="relative">
                <input type="text" name="code" value="{{ old('code', $code ?? '') }}"
                    class="block w-full py-2 pl-9 pr-24 text-sm text-gray-800 border border-black/30 rounded-lg"
                    placeholder="Kode Booking (misal: YN1234)" required />
                <button type="submit"
                    class="text-white absolute right-2 bottom-1.5 bg-blue-700 hover:bg-blue-800 font-medium rounded text-xs px-3 py-1.5">
                    Search
                </button>
            </div>
        </form>

        @if (isset($code))
            <div class="text-center text-sm text-gray-500 mt-4">
                <p>Kode Dimasukkan: <strong>{{ $code }}</strong></p>
                <p>Status Pencarian:
                    @if ($booking)
                        <span class="text-green-600 font-semibold">Ditemukan ✅</span>
                    @else
                        <span class="text-red-600 font-semibold">Tidak Ditemukan ❌</span>
                    @endif
                </p>
            </div>
        @endif

        {{-- Hasil Booking --}}
        @if (isset($booking) && $booking)
            <div
                class="mt-10 max-w-md mx-auto bg-white rounded-lg shadow-md border border-dashed border-gray-300 p-6 font-mono">
                <h2 class="text-center text-lg font-bold tracking-widest text-gray-800 border-b border-dashed pb-2 mb-4">
                    BOOKING DETAIL
                </h2>
                <div class="space-y-2 text-sm text-gray-800">
                    <div class="flex justify-between">
                        <span>Kode Booking</span>
                        <span>{{ $booking->kode_booking }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Nama</span>
                        <span>{{ $booking->nama }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Email</span>
                        <span>{{ $booking->email }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Telepon</span>
                        <span>{{ $booking->telp }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Alamat</span>
                        <span class="text-right w-40 truncate">{{ $booking->alamat }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Tanggal Booking</span>
                        <span>{{ \Carbon\Carbon::parse($booking->tanggal)->format('d M Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Deskripsi</span>
                        <span class="text-right w-40 truncate">{{ $booking->catatan }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Layanan</span>
                        <span class="text-right w-40 truncate">{{ $booking->layanan->nama ?? '-' }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Status</span>
                        <span class="capitalize font-semibold">{{ $booking->status }}</span>
                    </div>
                </div>

                <div class="border-t border-dashed mt-6 pt-4 text-center text-xs text-gray-500">
                    Terima kasih telah melakukan booking. <br>
                    Simpan struk ini sebagai bukti validasi.
                </div>
            </div>
        @elseif(isset($code))
            <p class="mt-6 text-center text-red-500">
                Kode booking <strong>{{ $code }}</strong> tidak ditemukan.
                </p>
        @endif
    </div>
@endsection
