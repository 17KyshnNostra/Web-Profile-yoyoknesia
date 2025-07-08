<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batches';
    protected $fillable = ['package_id', 'date', 'price', 'quota', 'available'];
    protected $casts = ['date' => 'date'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
