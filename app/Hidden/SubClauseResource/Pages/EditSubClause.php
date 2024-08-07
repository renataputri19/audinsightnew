<?php

namespace App\Filament\Resources\SubClauseResource\Pages;

use App\Filament\Resources\SubClauseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubClause extends EditRecord
{
    protected static string $resource = SubClauseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
