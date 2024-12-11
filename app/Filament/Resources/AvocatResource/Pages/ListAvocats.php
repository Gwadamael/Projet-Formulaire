<?php

namespace App\Filament\Resources\AvocatResource\Pages;

use App\Filament\Resources\AvocatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAvocats extends ListRecords
{
    protected static string $resource = AvocatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
