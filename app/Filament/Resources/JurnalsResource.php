<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JurnalsResource\Pages;
use App\Filament\Resources\JurnalsResource\RelationManagers;
use App\Models\Jurnal;
use App\Models\Jurnals;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JurnalsResource extends Resource
{
    protected static ?string $model = Jurnal::class;
    protected static ?string $navigationGroup = "Akutansi";
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
            'index' => Pages\ListJurnals::route('/'),
            'create' => Pages\CreateJurnals::route('/create'),
            'edit' => Pages\EditJurnals::route('/{record}/edit'),
        ];
    }
}
