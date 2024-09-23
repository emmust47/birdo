<?php

namespace App\Filament\Resources\BirdOrderResource\Pages;

use App\Filament\Resources\BirdOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBirdOrder extends EditRecord
{
    protected static string $resource = BirdOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
