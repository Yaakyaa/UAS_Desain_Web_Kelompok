<?php

namespace App\Filament\Resources\LogKegiatanResource\Pages;

use App\Filament\Resources\LogKegiatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLogKegiatan extends EditRecord
{
    protected static string $resource = LogKegiatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
