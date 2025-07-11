<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Booking;

class BookingStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Pemesanan', Booking::count())
                ->description('Total semua data pemesanan')
                ->color('primary')
                ->icon('heroicon-o-shopping-cart'),
        ];
    }
}

