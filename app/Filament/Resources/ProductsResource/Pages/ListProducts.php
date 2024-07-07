<?php

namespace App\Filament\Resources\ProductsResource\Pages;

use App\Filament\Resources\ProductsResource;
use App\Http\Controllers\ProductExportController;
use App\Imports\ProductImport;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('export')
                ->label('Export to Excel')
                ->action('ProductExportController')
                ->color('success'),
            Action::make("importproducts")
                ->label('Impor Products')
                ->form(
                    [
                        FileUpload::make('attachment')
                            ->disk('public')
                            ->directory('import')

                    ]
                )
                ->action(function (array $data) {
                    $file = public_path('storage/' . $data['attachment']);
                    try {;
                        Excel::import(new ProductImport, $file);
                        Notification::make()
                            ->title('Import Mutasi successfully')
                            ->success()
                            ->send();
                    } catch (\Exception $e) {
                        Notification::make()
                            ->title('Import failed: ' . $e->getMessage())
                            ->danger()
                            ->send();
                    }
                })
        ];
    }
    public function exportToExcel()
    {
        return app(ProductExportController::class)->export();
    }
}
