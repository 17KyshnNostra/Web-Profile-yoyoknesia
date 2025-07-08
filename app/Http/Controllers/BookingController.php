<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Layanan;
use App\Models\TanggalLibur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    public function store(StoreBookingRequest $request)
    {
        // Validasi request
        $request->validate([
            'layanan_id' => 'required|exists:layanans,id',
            'tanggal' => 'required|date',
            'nama' => 'required|string|max:255',
            'telp' => 'required|string|max:20',
            'email' => 'nullable|email',
            'alamat' => 'required|string|min:5', // <-- ini penting!
            'catatan' => 'nullable|string',
        ]);

        // Cek tanggal libur
        $isLibur = TanggalLibur::where('tanggal', $request->tanggal)->exists();

        // Cek tanggal sudah di-booking?
        $isSudahBooking = Booking::where('tanggal', $request->tanggal)
            // ->where('layanan_id', $request->layanan_id)
            ->whereIn('status', ['pending', 'dp', 'paid'])
            ->exists();

        if ($isLibur || $isSudahBooking) {
            return back()->withErrors(['tanggal' => 'Tanggal ini tidak tersedia!'])->withInput();
        }

        // Generate kode booking unik
        do {
            $kode_booking = 'YN' . str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
        } while (Booking::where('kode_booking', $kode_booking)->exists());

        // Simpan data booking (status pending)
        $booking = Booking::create([
            'layanan_id'   => $request->layanan_id,
            'tanggal'      => $request->tanggal,
            'nama'         => $request->nama,
            'telp'         => $request->telp,
            'email'        => $request->email,
            'catatan'        => $request->catatan,
            'alamat'        => $request->alamat,
            'status'       => 'pending',
            'kode_booking' => $kode_booking,
        ]);

        return redirect()->route('booking.form', ['layanan' => $request->layanan_id])
            ->with('code', $booking->kode_booking)
            ->with('success', 'Booking berhasil! Silakan catat kode booking Anda.');;

        return redirect()->route('booking.dp', ['kode' => $kode_booking]);
    }

    public function form($layananId)
    {
        // $layananId harus selalu ada (karena routemu sudah wajib param)
        $layanans = Layanan::all();
        $tanggalLibur = TanggalLibur::pluck('tanggal')->toArray();

        $bookedDates = Booking::whereIn('status', ['pending', 'dp', 'paid'])
            ->pluck('tanggal')
            ->map(fn($tgl) => \Carbon\Carbon::parse($tgl)->format('Y-m-d'))
            ->toArray();

        return view('booking.form', [
            'layanans' => $layanans,
            'tanggalLibur' => $tanggalLibur,
            'selectedLayanan' => $layananId,
            'bookedDates' => $bookedDates
        ]);
    }

    // public function dp($kode)
    // {
    //     $booking = Booking::where('kode_booking', $kode)->firstOrFail();
    //     return view('booking.dp', compact('booking'));
    // }

    // public function uploadDp(Request $request, $kode)
    // {
    //     $booking = Booking::where('kode_booking', $kode)->firstOrFail();

    //     $request->validate([
    //         'bukti_dp' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    //     ]);

    //     // Simpan file bukti DP
    //     $filePath = $request->file('bukti_dp')->store('bukti-dp', 'public');
    //     $booking->update([
    //         'bukti_dp' => $filePath,
    //         'status' => 'dp',
    //     ]);

    //     return redirect()->route('booking.status', ['kode' => $booking->kode_booking])
    //         ->with('success', 'Bukti DP berhasil diupload!');
    // }

    // public function status($kode)
    // {
    //     $booking = Booking::where('kode_booking', $kode)->firstOrFail();
    //     return view('booking.status', compact('booking'));
    // }

    public function trackingForm()
    {
        return view('track', [
            'booking' => null,
            'code' => null
        ]);
    }

    public function searchBooking(Request $request)
    {
        $request->validate([
            'code' => 'required|string'
        ]);

        $code = strtoupper(trim($request->input('code')));
        $booking = Booking::whereRaw('TRIM(UPPER(kode_booking)) = ?', [$code])->first();

        return view('track', [
            'booking' => $booking,
            'code' => $code,
        ]);
    }
}
