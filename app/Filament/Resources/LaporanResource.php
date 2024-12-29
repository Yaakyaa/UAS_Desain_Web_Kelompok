<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanResource\Pages;
use App\Models\Laporan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class LaporanResource extends Resource
{
    protected static ?string $model = Laporan::class;

    
    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationLabel = 'Laporan PKL';
    protected static ?string $navigationGroup = 'Laporan & Kegiatan';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('mahasiswa_id')
                ->relationship('mahasiswa', 'nama')
                ->required()
                ->label('Nama Mahasiswa'),
            Forms\Components\TextInput::make('judul')
                ->required()
                ->label('Judul Laporan'),
            Forms\Components\Textarea::make('laporan')
                ->required()
                ->label('Isi Laporan'),
            Forms\Components\Select::make('status')
                ->options([
                    'disetujui' => 'Disetujui',
                    'ditolak' => 'Ditolak',
                    'revisi' => 'Revisi',
                ])
                ->default('revisi')
                ->label('Status Laporan'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('judul')
                ->label('Judul Laporan'),
            Tables\Columns\TextColumn::make('laporan')
                ->label('Isi Laporan'),
            Tables\Columns\TextColumn::make('mahasiswa.nama')
                ->label('Nama Mahasiswa'),
            Tables\Columns\TextColumn::make('status')
                ->label('Status Laporan'),
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
            'index' => Pages\ListLaporans::route('/'),
            'create' => Pages\CreateLaporan::route('/create'),
            'edit' => Pages\EditLaporan::route('/{record}/edit'),
        ];
    }
}
