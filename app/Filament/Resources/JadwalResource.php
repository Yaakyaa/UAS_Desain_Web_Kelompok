<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalResource\Pages;
use App\Models\Jadwal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class JadwalResource extends Resource
{
    // Menentukan model yang digunakan
    protected static ?string $model = Jadwal::class;

    // Menentukan label navigasi
    protected static ?string $navigationLabel = 'Jadwal Seminar';
    protected static ?string $navigationGroup = 'Seminar & Komunikasi';
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    // Form untuk input data
    public static function form(Form $form): Form
    {
        return $form->schema([
            // Select untuk memilih mahasiswa yang mengisi jadwal
            Forms\Components\Select::make('mahasiswa_id')
                ->relationship('mahasiswa', 'nama')
                ->required()
                ->label('Nama Mahasiswa'),

            // Input untuk memilih tanggal seminar
            Forms\Components\DatePicker::make('tanggal')
                ->required()
                ->label('Tanggal Seminar'),

            // Input untuk memilih waktu seminar
            Forms\Components\TimePicker::make('waktu')
                ->required()
                ->label('Waktu Seminar'),

            // Input untuk tempat seminar
            Forms\Components\TextInput::make('tempat')
                ->required()
                ->label('Tempat Seminar'),
        ]);
    }

    // Menentukan tabel yang menampilkan data
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            // Kolom nama mahasiswa
            Tables\Columns\TextColumn::make('mahasiswa.nama')
                ->label('Nama Mahasiswa'),

            // Kolom tanggal seminar
            Tables\Columns\TextColumn::make('tanggal')
                ->date()
                ->label('Tanggal Seminar'),

            // Kolom waktu seminar
            Tables\Columns\TextColumn::make('waktu')
                ->time()
                ->label('Waktu Seminar'),

            // Kolom tempat seminar
            Tables\Columns\TextColumn::make('tempat')
                ->label('Tempat Seminar'),

            // Kolom waktu pembuatan
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->label('Dibuat Pada'),
        ])
        // Menambahkan aksi untuk edit dan delete
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        // Menambahkan aksi bulk untuk delete
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    // Mendefinisikan halaman yang tersedia
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
}
