<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggalLibur extends Model
{
    /** @use HasFactory<\Database\Factories\TanggalLiburFactory> */
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'keterangan',
    ];
}
