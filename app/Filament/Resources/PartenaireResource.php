<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartenaireResource\Pages;
use App\Filament\Resources\PartenaireResource\RelationManagers;
use App\Filament\Resources\PartenaireResource\RelationManagers\ContratsRelationManager;
use App\Models\Partenaire;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\maxLength;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartenaireResource extends Resource
{
    protected static ?string $model = Partenaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Parties prenantes';

    protected static ?string $modelLabel = 'Les partenaires';
// Eléments de mon formulaire
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Information Partenaire')
                ->description('Veuillez entrer les informations concérnant le partenaire')
                ->schema([
                    TextInput::make('nom')->required()->maxLength(100),
                    Textarea::make('nature_activite')->required()->maxLength(255),
                    TextInput::make('adresse_officiel')->required()->email()->suffixIcon('heroicon-o-envelope')->maxLength(100),
                    FileUpload::make('carte_identite'),
                    ])
            ])->columns(2);
    }
// Vue de la table Partenaire
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom'),
                Tables\Columns\TextColumn::make('nature_activite'),
                Tables\Columns\TextColumn::make('adresse_officiel'),
                Tables\Columns\TextColumn::make('carte_identite'),
            ])
            ->filters([
                //
            ])
            // Read Delete et Update
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
            ContratsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartenaires::route('/'),
            'create' => Pages\CreatePartenaire::route('/create'),
            'edit' => Pages\EditPartenaire::route('/{record}/edit'),
        ];
    }
}
