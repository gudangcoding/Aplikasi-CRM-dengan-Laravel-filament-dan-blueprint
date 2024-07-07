<?php

namespace App\Filament\Resources\SallariesResource\Pages;

use App\Filament\Resources\SallariesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSallaries extends ListRecords
{
    protected static string $resource = SallariesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
