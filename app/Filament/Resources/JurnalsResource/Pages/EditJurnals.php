<?php

namespace App\Filament\Resources\JurnalsResource\Pages;

use App\Filament\Resources\JurnalsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJurnals extends EditRecord
{
    protected static string $resource = JurnalsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
