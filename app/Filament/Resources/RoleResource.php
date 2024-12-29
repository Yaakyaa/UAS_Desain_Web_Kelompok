<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoleResource\Pages;
use App\Models\Role;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class RoleResource extends Resource
{
    // Menentukan model yang digunakan
    protected static ?string $model = Role::class;

    // Menentukan label navigasi
    protected static ?string $navigationGroup = 'Pengaturan Penguna';

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Role Pengguna';



    // Form untuk input data role
    public static function form(Form $form): Form
    {
        return $form->schema([
            // Input untuk nama role
            Forms\Components\TextInput::make('name')
                ->required() // Pastikan nama diisi
                ->label('Nama Role') // Label yang lebih jelas untuk field ini
                ->maxLength(255), // Maksimal panjang nama role
        ]);
    }

    // Menentukan tabel yang menampilkan data role
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            // Kolom nama role
            Tables\Columns\TextColumn::make('name')
                ->label('Nama Role'), // Label untuk kolom nama role

            // Kolom waktu pembuatan role
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->label('Dibuat Pada'), // Label untuk kolom waktu pembuatan
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
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'edit' => Pages\EditRole::route('/{record}/edit'),
        ];
    }
}
