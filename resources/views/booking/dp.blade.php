@extends('layout.app')

@section('content')
<div class="max-w-lg mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Instruksi Pembayaran DP</h2>
    <p>Kode Booking Anda: <span class="font-mono bg-gray-200 px-2">{{ $booking->kode_booking }}</span></p>
    <p>Silakan transfer DP ke rekening berikut: <b>0123456789 a.n. Nama Bank</b></p>
    <p>Lalu upload bukti pembayaran di bawah ini:</p>
    <form method="POST" action="{{ route('booking.dp.upload', $booking->kode_booking) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <input type="file" name="bukti_dp" accept="image/*" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Upload Bukti DP</button>
    </form>
</div>
@endsection
