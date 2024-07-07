<?php

namespace App\Filament\Resources\StatusShipmentsResource\Pages;

use App\Filament\Resources\StatusShipmentsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatusShipments extends EditRecord
{
    protected static string $resource = StatusShipmentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
