<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Requirement;

class ManageRequirements extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static string $view = 'filament.pages.manage-requirements';
    
    protected function getViewData(): array
    {
        return [
            'requirements' => Requirement::all(),
        ];
    }
}
