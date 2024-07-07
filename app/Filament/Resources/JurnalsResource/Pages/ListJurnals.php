<?php

namespace App\Filament\Resources\JurnalsResource\Pages;

use App\Filament\Resources\JurnalsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJurnals extends ListRecords
{
    protected static string $resource = JurnalsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
