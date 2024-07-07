<?php

namespace App\Filament\Resources\CutiesResource\Pages;

use App\Filament\Resources\CutiesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCuties extends EditRecord
{
    protected static string $resource = CutiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
