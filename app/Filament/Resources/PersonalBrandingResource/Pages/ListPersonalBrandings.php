<?php

namespace App\Filament\Resources\PersonalBrandingResource\Pages;

use App\Filament\Resources\PersonalBrandingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonalBrandings extends ListRecords
{
    protected static string $resource = PersonalBrandingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
