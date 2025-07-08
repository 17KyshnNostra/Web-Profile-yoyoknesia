@extends('layout.app')

@section('content')
<div class="max-w-lg mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Status Booking</h2>
    <p>Kode Booking: <span class="font-mono bg-gray-200 px-2">{{ $booking->kode_booking }}</span></p>
    <p>Layanan: <b>{{ $booking->layanan->nama }}</b></p>
    <p>Tanggal: {{ $booking->tanggal }}</p>
    <p>Nama: {{ $booking->nama }}</p>
    <p>Status: <b class="text-blue-600">{{ ucfirst($booking->status) }}</b></p>
    @if($booking->bukti_dp)
        <p class="mt-2">Bukti DP: <br>
            <img src="{{ asset('storage/'.$booking->bukti_dp) }}" class="w-32 mt-2 rounded shadow">
        </p>
    @endif
</div>
@endsection
