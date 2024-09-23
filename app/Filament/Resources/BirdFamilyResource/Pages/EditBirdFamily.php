<?php

namespace App\Filament\Resources\BirdFamilyResource\Pages;

use App\Filament\Resources\BirdFamilyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBirdFamily extends EditRecord
{
    protected static string $resource = BirdFamilyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
