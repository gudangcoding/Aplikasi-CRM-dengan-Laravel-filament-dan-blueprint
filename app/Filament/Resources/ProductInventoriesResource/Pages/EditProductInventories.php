<?php

namespace App\Filament\Resources\ProductInventoriesResource\Pages;

use App\Filament\Resources\ProductInventoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductInventories extends EditRecord
{
    protected static string $resource = ProductInventoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
