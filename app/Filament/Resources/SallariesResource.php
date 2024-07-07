<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SallariesResource\Pages;
use App\Filament\Resources\SallariesResource\RelationManagers;
use App\Models\Sallaries;
use App\Models\Sallary;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SallariesResource extends Resource
{
    protected static ?string $model = Sallary::class;
    protected static ?string $navigationGroup = "Payroll";
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSallaries::route('/'),
            'create' => Pages\CreateSallaries::route('/create'),
            'edit' => Pages\EditSallaries::route('/{record}/edit'),
        ];
    }
}
