<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_booking')
                    ->label('Kode Booking')
                    ->disabled(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'dp'      => 'Sudah DP',
                        'paid'    => 'Lunas',
                        'done'    => 'Selesai',
                        'batal'   => 'Batal',
                    ])
                    ->required(),

                TextInput::make('nama')->label('Nama')->disabled(),
                TextInput::make('telp')->label('Telepon')->disabled(),
                TextInput::make('email')->label('Email')->disabled(),
                TextInput::make('catatan')->label('Catatan'),

                Select::make('layanan_id')
                    ->label('Layanan')
                    ->relationship('layanan', 'nama')
                    ->disabled(),

                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->disabled(),

                FileUpload::make('bukti_dp')
                    ->label('Bukti DP')
                    ->directory('bukti-dp')
                    ->image()
                    ->downloadable()
                    ->previewable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_booking')->label('Kode')->searchable()->sortable(),
                TextColumn::make('nama')->label('Nama')->searchable(),
                TextColumn::make('layanan.nama')->label('Layanan'),
                TextColumn::make('tanggal')->label('Tanggal')->date(),
                TextColumn::make('status')->label('Status')->badge(),
                TextColumn::make('telp')->label('Telpon'),
                TextColumn::make('alamat')->label('Alamat'),
                TextColumn::make('catatan')->label('Catatan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
