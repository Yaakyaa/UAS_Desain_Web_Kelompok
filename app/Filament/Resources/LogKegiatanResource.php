<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogKegiatanResource\Pages;
use App\Models\LogKegiatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class LogKegiatanResource extends Resource
{
    protected static ?string $model = LogKegiatan::class;

    // protected static ?string $navigationIcon = 'icon-log-kegiatan';
    protected static ?string $navigationLabel = 'Log Kegiatan';
    protected static ?string $navigationGroup = 'Laporan & Kegiatan';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('mahasiswa_id')
                ->relationship('mahasiswa', 'nama')  // pastikan relasi ini ada di model LogKegiatan
                ->required()
                ->label('Nama Mahasiswa'),

            Forms\Components\DatePicker::make('tanggal')
                ->required()
                ->label('Tanggal Kegiatan'),

            Forms\Components\TextInput::make('kegiatan')
                ->required()
                ->label('Deskripsi Kegiatan'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('mahasiswa.nama')
                ->label('Nama Mahasiswa')
                ->sortable(),  // Menambahkan sorting untuk kolom ini

            Tables\Columns\TextColumn::make('tanggal')
                ->date('d-M-Y')  // Format tanggal
                ->label('Tanggal Kegiatan')
                ->sortable(),  // Menambahkan sorting untuk kolom ini

            Tables\Columns\TextColumn::make('kegiatan')
                ->label('Deskripsi Kegiatan'),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime('d-M-Y H:i')  // Format tanggal dan waktu
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
            'index' => Pages\ListLogKegiatans::route('/'),
            'create' => Pages\CreateLogKegiatan::route('/create'),
            'edit' => Pages\EditLogKegiatan::route('/{record}/edit'),
        ];
    }
}
