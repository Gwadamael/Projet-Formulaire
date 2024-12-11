<?php

namespace App\Filament\Resources\PartenaireResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContratsRelationManager extends RelationManager
{
    protected static string $relationship = 'contrats';

    public function form(Form $form): Form
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

            ])->columns(3);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('contrat_id')
            ->columns([
                Tables\Columns\TextColumn::make('contrat_id'),
                Tables\Columns\TextColumn::make('nom_partenariat'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
