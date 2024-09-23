<?php

namespace App\Filament\Resources\BirdFamilyResource\Pages;

use App\Filament\Resources\BirdFamilyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBirdFamilies extends ListRecords
{
    protected static string $resource = BirdFamilyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
