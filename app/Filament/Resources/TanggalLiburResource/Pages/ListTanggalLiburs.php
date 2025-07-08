<?php

namespace App\Filament\Resources\TanggalLiburResource\Pages;

use App\Filament\Resources\TanggalLiburResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTanggalLiburs extends ListRecords
{
    protected static string $resource = TanggalLiburResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
