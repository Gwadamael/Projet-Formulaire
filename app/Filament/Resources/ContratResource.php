<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContratResource\Pages;
use App\Filament\Resources\ContratResource\RelationManagers;
use App\Models\Contrat;
use App\Models\Partenaire;
use App\Models\Avocat;
use Filament\Forms\Form;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContratResource extends Resource
{
    // Spécifie le modèle associé à cette ressource
    protected static ?string $model = Contrat::class;
    // Icône et groupe de navigation dans Filament
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Gestion des contrat';

    protected static ?string $modelLabel = ' un  contrat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contrat')
                    ->description('Infos Contrat')
                    ->schema([
                        DatePicker::make('date_contrat'),
                        DatePicker::make('date_terme'),
                        DatePicker::make('date_clause'),
                        Textarea::make('contributions')->maxLength(255),
                        TextInput::make('repartition')->maxLength(105),
                        Textarea::make('juridiction_etat')->maxLength(255),
                        TextInput::make('activite')->maxLength(105),
                        TextInput::make('nom_partenariat')->maxLength(105),
                        TextInput::make('adresse_siege')->maxLength(105),
                        TextInput::make('nombre_signataires')->numeric(),

                    ])->columns(2),
                    // Section pour sélectionner un avocat
                Section::make('Avocat')
                    ->description('Infos avocat')
                    ->schema([
                        Select::make('avocat_id')
                            ->label('Nom de l\'avocat')
                            ->options(Avocat::all()->pluck('nom', 'id'))
                            ->searchable()
                    ]),
                    // Section pour sélectionner les partenaires
                Section::make('Partenaire')
                    ->description('Infos de partenaire')
                    ->schema([
                        // Permettre la sélection de plusieurs partenaires
                        Select::make('partenaires')  // Utilisez un nom différent, car vous avez une relation many-to-many
                            ->label('Nom des partenaires')
                            ->multiple()  // Permettre plusieurs sélections
                            ->relationship('partenaires', 'nom')  // Utiliser la relation définie dans le modèle Contrat
                            ->searchable()
                    ]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date_contrat'),
                Tables\Columns\TextColumn::make('date_terme'),
                Tables\Columns\TextColumn::make('juridiction_etat'),
                Tables\Columns\TextColumn::make('nom_partenariat'),
                Tables\Columns\TextColumn::make('adresse_siege'),
                Tables\Columns\TextColumn::make('nombre_signataires'),
                // Tables\Columns\TextColumn::make('avocat_id'),
                // Tables\Columns\TextColumn::make('partenaire_id'),
                // Affichage du nom de l'avocat
            Tables\Columns\TextColumn::make('avocat.nom')
            ->label('Nom de l\'avocat') // Affiche le nom de l'avocat lié au contrat
            ->sortable()
            ->searchable(),
                Tables\Columns\TextColumn::make('partenaires')  // Notez l'utilisation du bon nom de la relation
                    ->label('Partenaires')
                    ->formatStateUsing(fn($state) =>
                    // Vérifie si le state est une chaîne JSON
                    implode(', ', array_column(array_map('json_decode', explode(", ",$state), array_fill(0, count(explode(", ",$state)), true)), 'nom'))
                ),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

                // Action personnalisée pour imprimer
                Action::make('print')
                ->label('Imprimer') // Le label du bouton
                ->icon('heroicon-o-printer') // Icone pour le bouton
                ->url(fn ($record) => route('contrats.print', $record)) // URL vers la route pour l'impression
                ->openUrlInNewTab(), // Ouvre dans un nouvel onglet
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
            'index' => Pages\ListContrats::route('/'),
            'create' => Pages\CreateContrat::route('/create'),
            'edit' => Pages\EditContrat::route('/{record}/edit'),
        ];
    }
}
