<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Booking;

class BookingChart extends ChartWidget
{
    protected static ?string $heading = 'Statistik Booking';
    protected static ?int $sort = 2; // Supaya muncul di atas

    protected function getData(): array
    {
        $data = Booking::selectRaw('layanan_id, COUNT(*) as total')
            ->groupBy('layanan_id')
            ->pluck('total', 'layanan_id');

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Booking',
                    'data' => $data->values(),
                    'backgroundColor' => ['#3B82F6', '#10B981', '#F59E0B', '#EF4444'], // Warna bar
                ],
            ],
            'labels' => $data->keys(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
