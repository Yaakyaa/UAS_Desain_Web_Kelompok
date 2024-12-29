<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalBrandingResource\Pages;
use App\Models\PersonalBranding;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class PersonalBrandingResource extends Resource
{
    protected static ?string $model = PersonalBranding::class;
    protected static ?string $navigationLabel = 'Personal Branding';
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Personal';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Name'),
            Forms\Components\TextInput::make('nim')
                ->required()
                ->unique(PersonalBranding::class, 'nim')
                ->label('NIM'),
            Forms\Components\FileUpload::make('image')
                ->nullable()
                ->label('Image'),
            Forms\Components\TextInput::make('prodi')
                ->required()
                ->label('Program Studi'),
            Forms\Components\TextInput::make('alamat')
                ->required()
                ->label('Alamat'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Name'),
            Tables\Columns\TextColumn::make('nim')
                ->label('NIM'),
            Tables\Columns\TextColumn::make('prodi')
                ->label('Program Studi'),
            Tables\Columns\TextColumn::make('alamat')
                ->label('Alamat'),
                Tables\Columns\ImageColumn::make('image') ->label('Image'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime('d-M-Y H:i')
                ->label('Created At'),
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
            'index' => Pages\ListPersonalBrandings::route('/'),
            'create' => Pages\CreatePersonalBranding::route('/create'),
            'edit' => Pages\EditPersonalBranding::route('/{record}/edit'),
        ];
    }
}
