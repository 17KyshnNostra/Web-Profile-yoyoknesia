<?php

namespace App\Filament\Resources\TanggalLiburResource\Pages;

use App\Filament\Resources\TanggalLiburResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTanggalLibur extends EditRecord
{
    protected static string $resource = TanggalLiburResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
