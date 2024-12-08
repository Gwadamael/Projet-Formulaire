<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvocatResource\Pages;
use App\Filament\Resources\AvocatResource\RelationManagers;
use App\Models\Avocat;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\maxLength;
use Filament\Forms\Components\Section;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AvocatResource extends Resource
{
    protected static ?string $model = Avocat::class;
// Ajout d'icones de nom de navigation et groupe
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Avocat';

    protected static ?string $modelLabel = 'un Avocat';

    protected static ?string $navigationGroup = 'Parties prenantes';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Information Avocat')
                    ->description('Veuillez entrer les informations concérnant l\'avocat')
                    ->schema([
                        TextInput::make('nom')->required()->maxLength(50),
                        TextInput::make('adresse_officiel')->required()->email()->suffixIcon('heroicon-o-envelope')->maxLength(100),
                        TextInput::make('cabinet_adresse')->required()->suffixIcon('heroicon-o-map-pin')->maxLength(100),
                        ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom'),
                Tables\Columns\TextColumn::make('adresse_officiel'),
                Tables\Columns\TextColumn::make('cabinet_adresse'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAvocats::route('/'),
            'create' => Pages\CreateAvocat::route('/create'),
            'edit' => Pages\EditAvocat::route('/{record}/edit'),
        ];
    }
}
