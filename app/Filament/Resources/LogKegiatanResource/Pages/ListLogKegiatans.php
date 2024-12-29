<?php

namespace App\Filament\Resources\LogKegiatanResource\Pages;

use App\Filament\Resources\LogKegiatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogKegiatans extends ListRecords
{
    protected static string $resource = LogKegiatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
