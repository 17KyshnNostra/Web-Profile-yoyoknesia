@extends('layout.app')

@section('content')
    <div class="w-full px-4 py-16 bg-white">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-700 mb-8">
                Form Pemesanan Jasa Videografi
            </h1>

            {{-- Alert --}}
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Form --}}
            <form method="POST" action="{{ route('booking.store') }}" class="space-y-6">
                @csrf

                {{-- Pilih Layanan --}}
                @if (isset($selectedLayanan) && $selectedLayanan)
                    <input type="hidden" name="layanan_id" value="{{ $selectedLayanan }}">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Layanan</label>
                        <div class="bg-gray-100 border rounded px-4 py-2 font-semibold">
                            {{ $layanans->where('id', $selectedLayanan)->first()->nama ?? '-' }}
                        </div>
                    </div>
                @else
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Layanan</label>
                        <select name="layanan_id" class="w-full border rounded-lg px-4 py-2" required>
                            <option value="">-- Pilih Layanan --</option>
                            @foreach ($layanans as $layanan)
                                <option value="{{ $layanan->id }}"
                                    {{ old('layanan_id') == $layanan->id ? 'selected' : '' }}>{{ $layanan->nama }}</option>
                            @endforeach
                        </select>
                        @error('layanan_id')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                @endif

                {{-- Nama --}}
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="w-full border rounded-lg px-4 py-2 @error('nama') border-red-500 @enderror" required>
                    @error('nama')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full border rounded-lg px-4 py-2 @error('email') border-red-500 @enderror" required>
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Telepon --}}
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Nomor Telepon</label>
                    <input type="text" name="telp" value="{{ old('telp') }}"
                        class="w-full border rounded-lg px-4 py-2 @error('telp') border-red-500 @enderror" required>
                    @error('telp')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Tanggal Booking (pakai calendar custom) --}}
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                    <label class="block text-gray-700 font-medium mb-2">Pilih Tanggal Booking</label>
                    <input type="text" id="bookingDate" name="tanggal"
                        class="w-full border rounded px-4 py-2 mb-4 text-gray-700 focus:outline-none focus:ring" readonly
                        required value="{{ old('tanggal') }}">

                    <div class="flex justify-between items-center mb-4">
                        <button type="button" id="prevMonth"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            &lt; Prev
                        </button>
                        <h3 id="currentMonthYear" class="text-lg font-semibold text-gray-700"></h3>
                        <button type="button" id="nextMonth"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Next &gt;
                        </button>
                    </div>

                    <div id="calendar" class="grid grid-cols-7 gap-2 text-sm">
                        <!-- Calendar content will be rendered here -->
                    </div>
                    @error('tanggal')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Alamat --}}
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Alamat</label>
                    <textarea name="alamat" rows="3"
                        class="w-full border rounded-lg px-4 py-2 @error('alamat') border-red-500 @enderror" required>{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Deskripsi --}}
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Deskripsi Pesanan</label>
                    <textarea name="catatan" rows="4"
                        class="w-full border rounded-lg px-4 py-2 @error('deskripsi') border-red-500 @enderror"
                        placeholder="Ceritakan kebutuhan videografi Anda (acara, durasi, lokasi, dll)" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg">
                        Kirim Pemesanan
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal Kode Booking --}}
    @if (session('code'))
        @php
            $booking = \App\Models\Booking::where('kode_booking', session('code'))->first(); // ambil ulang data dari database

            $name = $booking->nama ?? 'Pelanggan';
            $tanggal = $booking->tanggal ?? now();
            $formattedDate = \Carbon\Carbon::parse($tanggal)->locale('id')->translatedFormat('d F Y');
            $code = $booking->code ?? session('code');
            $whatsappText = rawurlencode(
                "Halo admin, saya sudah melakukan booking jasa videografi.\n\nKode Booking: $code\nNama: $name\nTanggal Booking: $formattedDate\n\nTerima kasih.",
            );
            $waNumber = '6281297706081'; // Ganti dengan nomor WhatsApp admin
        @endphp

        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" id="modal-overlay">
            <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full text-center">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Booking Berhasil!</h2>
                <p class="text-sm text-gray-600">Kode Booking Anda:</p>
                <p class="text-lg font-bold text-blue-600 mt-2">{{ $code }}</p>

                <p class="mt-4 text-sm text-gray-500">Silakan simpan kode ini. Anda bisa langsung konfirmasi ke admin
                    melalui WhatsApp.</p>

                <div class="mt-6 flex justify-center gap-4">
                    <a href="https://wa.me/{{ $waNumber }}?text={{ $whatsappText }}" target="_blank"
                        rel="noopener noreferrer"
                        class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded text-sm">
                        Kirim ke WhatsApp
                    </a>
                    <button onclick="document.getElementById('modal-overlay').remove();"
                        class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded text-sm">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    @endif

    {{-- Script Kalender --}}
    <script>
        const bookingDateInput = document.getElementById('bookingDate');
        const currentMonthYearHeader = document.getElementById('currentMonthYear');
        const calendarDiv = document.getElementById('calendar');
        const prevMonthBtn = document.getElementById('prevMonth');
        const nextMonthBtn = document.getElementById('nextMonth');

        let currentDate = new Date();
        let currentYear = currentDate.getFullYear();
        let currentMonth = currentDate.getMonth();

        // Ambil tanggal sudah di-booking dan tanggal libur dari backend
        const bookedDates = @json($bookedDates ?? []);
        const tanggalLibur = @json($tanggalLibur ?? []);

        function renderCalendar() {
            calendarDiv.innerHTML = `
            <div class="font-bold text-center">Min</div>
            <div class="font-bold text-center">Sen</div>
            <div class="font-bold text-center">Sel</div>
            <div class="font-bold text-center">Rab</div>
            <div class="font-bold text-center">Kam</div>
            <div class="font-bold text-center">Jum</div>
            <div class="font-bold text-center">Sab</div>
        `;

            currentMonthYearHeader.textContent = new Date(currentYear, currentMonth).toLocaleString('id-ID', {
                month: 'long',
                year: 'numeric'
            });

            const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

            for (let i = 0; i < firstDayOfMonth; i++) {
                calendarDiv.appendChild(document.createElement('div'));
            }

            const today = new Date();
            today.setHours(0, 0, 0, 0); // normalize today

            for (let day = 1; day <= daysInMonth; day++) {
                const monthStr = String(currentMonth + 1).padStart(2, '0');
                const dayStr = String(day).padStart(2, '0');
                const dateString = `${currentYear}-${monthStr}-${dayStr}`;
                const dayDiv = document.createElement('div');
                dayDiv.textContent = day;
                dayDiv.classList.add('text-center', 'py-1', 'rounded', 'cursor-pointer', 'calendar-day');

                const cellDate = new Date(currentYear, currentMonth, day);
                cellDate.setHours(0, 0, 0, 0);

                if (bookedDates.includes(dateString) || tanggalLibur.includes(dateString)) {
                    dayDiv.classList.add('bg-red-700', 'text-white', 'cursor-not-allowed');
                    dayDiv.title = bookedDates.includes(dateString) ? "Tanggal sudah dibooking" :
                        "Tanggal libur/tidak tersedia";
                } else if (cellDate < today) {
                    dayDiv.classList.add('bg-gray-300', 'text-gray-500', 'cursor-not-allowed');
                    dayDiv.title = "Tanggal sudah lewat";
                } else {
                    dayDiv.classList.add('hover:bg-blue-100');
                    dayDiv.addEventListener('click', () => {
                        document.querySelectorAll('.calendar-day.selected')?.forEach(el => el.classList.remove(
                            'bg-blue-500', 'text-white', 'selected'));
                        dayDiv.classList.add('bg-blue-500', 'text-white', 'selected');
                        bookingDateInput.value = dateString;
                    });
                }

                calendarDiv.appendChild(dayDiv);
            }
        }

        prevMonthBtn.addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar();
        });

        nextMonthBtn.addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            renderCalendar();
        });

        document.addEventListener("DOMContentLoaded", renderCalendar);
    </script>
@endsection
