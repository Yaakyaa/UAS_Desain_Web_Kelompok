<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstansiResource\Pages;
use App\Models\Instansi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class InstansiResource extends Resource
{
    protected static ?string $model = Instansi::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    

    protected static ?string $navigationLabel = 'Instansi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama_instansi')
                ->required()
                ->label('Nama Instansi'),
            Forms\Components\TextInput::make('alamat')
                ->required()
                ->label('Alamat'),
            Forms\Components\TextInput::make('kontak')
                ->required()
                ->label('Kontak'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama_instansi')
                ->sortable()
                ->label('Nama Instansi'),
            Tables\Columns\TextColumn::make('alamat')
                ->label('Alamat'),
            Tables\Columns\TextColumn::make('kontak')
                ->label('Kontak'),
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
            'index' => Pages\ListInstansis::route('/'),
            'create' => Pages\CreateInstansi::route('/create'),
            'edit' => Pages\EditInstansi::route('/{record}/edit'),
        ];
    }
}
