<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequirementResource\Pages;
use App\Filament\Resources\RequirementResource\RelationManagers;
use App\Models\Requirement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequirementResource extends Resource
{
    protected static ?string $model = Requirement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationGroup = 'ISO 9001 Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sub_sub_clause_id')
                    ->relationship('subSubClause', 'title')->required(),
                Forms\Components\FileUpload::make('document')
                    ->multiple()->required(),
                Forms\Components\FileUpload::make('policy')
                    ->multiple()->required(),
                Forms\Components\FileUpload::make('rule')
                    ->multiple()->required(),
                Forms\Components\FileUpload::make('process')
                    ->multiple()->required(),
                Forms\Components\FileUpload::make('implementation')
                    ->multiple()->required(),
                Forms\Components\FileUpload::make('procedure')
                    ->multiple()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subSubClause.title')->label('Sub Sub Clause'),
                Tables\Columns\TextColumn::make('document')->label('Document'),
                Tables\Columns\TextColumn::make('policy')->label('Policy'),
                Tables\Columns\TextColumn::make('rule')->label('Rule'),
                Tables\Columns\TextColumn::make('process')->label('Process'),
                Tables\Columns\TextColumn::make('implementation')->label('Implementation'),
                Tables\Columns\TextColumn::make('procedure')->label('Procedure'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRequirements::route('/'),
            'create' => Pages\CreateRequirement::route('/create'),
            'edit' => Pages\EditRequirement::route('/{record}/edit'),
        ];
    }
}
