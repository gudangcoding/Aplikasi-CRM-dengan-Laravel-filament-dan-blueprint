<?php

namespace App\Filament\Resources\StatusShipmentsResource\Pages;

use App\Filament\Resources\StatusShipmentsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatusShipments extends ListRecords
{
    protected static string $resource = StatusShipmentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
