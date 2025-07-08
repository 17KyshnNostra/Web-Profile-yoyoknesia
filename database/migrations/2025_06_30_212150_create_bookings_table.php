<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_id')->constrained('layanans')->onDelete('cascade');
            $table->date('tanggal');
            $table->string('nama');
            $table->string('telp');
            $table->string('email')->nullable();
            $table->text('catatan')->nullable(); // <-- tambahan catatan di sini
            $table->text('alamat'); // <-- tambahan catatan di sini
            $table->string('status')->default('pending');
            $table->string('kode_booking')->unique();
            $table->string('bukti_dp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
