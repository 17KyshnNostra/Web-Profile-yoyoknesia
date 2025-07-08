<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $fillable = [
        'layanan_id',
        'tanggal',
        'nama',
        'telp',
        'email',
        'catatan',
        'alamat',
        'status',
        'kode_booking',
        'bukti_dp'
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}
