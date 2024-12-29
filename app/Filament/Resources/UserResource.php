<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'Pengaturan Penguna';
    protected static ?string $navigationGroupIcon = 'heroicon-o-users';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Pengguna';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Nama Pengguna'),
            Forms\Components\TextInput::make('email')
                ->required()
                ->unique(User::class, 'email')
                ->label('Email Pengguna'),
            Forms\Components\TextInput::make('password')
                ->password()
                ->required()
                ->minLength(8)
                ->label('Password Pengguna'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Nama Pengguna'),
            Tables\Columns\TextColumn::make('email')
                ->label('Email Pengguna'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    // Jika Anda ingin memproses password sebelum disimpan, gunakan model events atau observer
    // Sebagai contoh, di dalam model User:
    // public static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($user) {
    //         $user->password = bcrypt($user->password);
    //     });
    // }
}
