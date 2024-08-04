<?php

namespace App\Filament\Resources\ClauseResource\Pages;

use App\Filament\Resources\ClauseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClause extends EditRecord
{
    protected static string $resource = ClauseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
