<?php

namespace App\Filament\Resources\PersonalBrandingResource\Pages;

use App\Filament\Resources\PersonalBrandingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersonalBranding extends EditRecord
{
    protected static string $resource = PersonalBrandingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
