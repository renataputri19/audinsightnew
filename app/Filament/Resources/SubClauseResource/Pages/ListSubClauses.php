<?php

namespace App\Filament\Resources\SubClauseResource\Pages;

use App\Filament\Resources\SubClauseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubClauses extends ListRecords
{
    protected static string $resource = SubClauseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
