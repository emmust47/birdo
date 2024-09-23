<?php

namespace App\Filament\Resources\BirdOrderResource\Pages;

use App\Filament\Resources\BirdOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBirdOrders extends ListRecords
{
    protected static string $resource = BirdOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
