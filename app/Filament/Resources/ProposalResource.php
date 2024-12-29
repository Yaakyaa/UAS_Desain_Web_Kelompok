<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProposalResource\Pages;
use App\Models\Proposal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class ProposalResource extends Resource
{
    // Menentukan model yang digunakan
    protected static ?string $model = Proposal::class;

    protected static ?string $navigationGroup = 'Laporan & Kegiatan';

    // Menentukan label navigasi
    protected static ?string $navigationLabel = 'Proposal PKL';

    // Form untuk input data proposal
    public static function form(Form $form): Form
    {
        return $form->schema([
            // Input untuk judul proposal
            Forms\Components\TextInput::make('judul')
                ->required()
                ->label('Judul Proposal'),

            // Input untuk deskripsi proposal
            Forms\Components\Textarea::make('deskripsi')
                ->required()
                ->label('Deskripsi Proposal'),

            // Select untuk memilih mahasiswa yang mengajukan proposal
            Forms\Components\Select::make('mahasiswa_id')
                ->relationship('mahasiswa', 'nama')
                ->required()
                ->label('Nama Mahasiswa'),

            // Select untuk memilih status proposal
            Forms\Components\Select::make('status')
                ->options([
                   'belum diisi' => 'Belum diisi', 'disetujui' => 'Disetujui', 'ditolak' => 'Ditolak', 'revisi' => 'Revisi'
                ])
                ->default('revisi')
                ->label('Status Proposal'),

            // Input untuk mengunggah file proposal
            Forms\Components\FileUpload::make('file')
                ->label('File Proposal')
                ->directory('proposals')
                ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']),
        ]);
    }

    // Menentukan tabel yang menampilkan data proposal
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            // Kolom judul proposal
            Tables\Columns\TextColumn::make('judul')
                ->label('Judul Proposal'),

            // Kolom deskripsi proposal
            Tables\Columns\TextColumn::make('deskripsi')
                ->label('Deskripsi Proposal'),

            // Kolom nama mahasiswa
            Tables\Columns\TextColumn::make('mahasiswa.nama')
                ->label('Nama Mahasiswa'),

            // Kolom status proposal
            Tables\Columns\TextColumn::make('status')
                ->label('Status Proposal'),

            // Kolom waktu pembuatan proposal
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
            'index' => Pages\ListProposals::route('/'),
            'create' => Pages\CreateProposal::route('/create'),
            'edit' => Pages\EditProposal::route('/{record}/edit'),
        ];
    }
}
