<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KomentarResource\Pages;
use App\Models\Komentar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class KomentarResource extends Resource
{
    protected static ?string $model = Komentar::class;

     
    protected static ?string $navigationGroup = 'Seminar & Komunikasi';
    protected static ?string $navigationLabel = 'Komentar';
    
    public static function form(Form $form): Form
    {
        return $form->schema([
            // Select untuk memilih Laporan
            Forms\Components\Select::make('laporan_id')
                ->relationship('laporan', 'judul')
                ->nullable(),

            // Select untuk memilih Log Kegiatan
            Forms\Components\Select::make('log_kegiatan_id')
                ->relationship('logKegiatan', 'kegiatan')
                ->nullable(),

            // Textarea untuk kolom komentar
            Forms\Components\Textarea::make('komentar')
                ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            // Menampilkan judul laporan
            Tables\Columns\TextColumn::make('laporan.judul')->sortable(),

            // Menampilkan kegiatan log
            Tables\Columns\TextColumn::make('logKegiatan.kegiatan')->sortable(),

            // Menampilkan komentar
            Tables\Columns\TextColumn::make('komentar'),

            // Menampilkan waktu pembuatan komentar
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
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
            'index' => Pages\ListKomentars::route('/'),
            'create' => Pages\CreateKomentar::route('/create'),
            'edit' => Pages\EditKomentar::route('/{record}/edit'),
        ];
    }
}
