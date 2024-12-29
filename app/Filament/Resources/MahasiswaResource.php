<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;
    protected static ?string $navigationGroup = 'Laporan & Kegiatan';
    protected static ?string $navigationLabel = 'Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')
                ->required()
                ->label('Nama Mahasiswa'),
            Forms\Components\TextInput::make('nim')
                ->required()
                ->unique(Mahasiswa::class, 'nim')
                ->label('NIM'),
            Forms\Components\TextInput::make('prodi')
                ->required()
                ->label('Program Studi'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama')
                ->label('Nama Mahasiswa'),
            Tables\Columns\TextColumn::make('nim')
                ->label('NIM'),
            Tables\Columns\TextColumn::make('prodi')
                ->label('Program Studi'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime('d-M-Y H:i')
                ->label('Tanggal Dibuat'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
