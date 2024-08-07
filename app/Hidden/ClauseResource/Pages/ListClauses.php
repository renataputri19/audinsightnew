<?php

namespace App\Filament\Resources\ClauseResource\Pages;

use App\Filament\Resources\ClauseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClauses extends ListRecords
{
    protected static string $resource = ClauseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
