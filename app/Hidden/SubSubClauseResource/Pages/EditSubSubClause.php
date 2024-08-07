<?php

namespace App\Filament\Resources\SubSubClauseResource\Pages;

use App\Filament\Resources\SubSubClauseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubSubClause extends EditRecord
{
    protected static string $resource = SubSubClauseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
