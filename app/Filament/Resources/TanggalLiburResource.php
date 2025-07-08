<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TanggalLiburResource\Pages;
use App\Filament\Resources\TanggalLiburResource\RelationManagers;
use App\Models\TanggalLibur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TanggalLiburResource extends Resource
{
    protected static ?string $model = TanggalLibur::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal')
                    ->required()
                    ->unique(),
                Forms\Components\TextInput::make('keterangan')
                    ->maxLength(255)
                    ->label('Keterangan')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal')->date(),
                Tables\Columns\TextColumn::make('keterangan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTanggalLiburs::route('/'),
            'create' => Pages\CreateTanggalLibur::route('/create'),
            'edit' => Pages\EditTanggalLibur::route('/{record}/edit'),
        ];
    }
}
