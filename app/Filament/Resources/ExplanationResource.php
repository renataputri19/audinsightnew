<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExplanationResource\Pages;
use App\Filament\Resources\ExplanationResource\RelationManagers;
use App\Models\Explanation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExplanationResource extends Resource
{
    protected static ?string $model = Explanation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sub_sub_clause_id')
                    ->relationship('subSubClause', 'title')->required(),
                Forms\Components\Textarea::make('explanation')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subSubClause.title')->label('Sub Sub Clause'),
                Tables\Columns\TextColumn::make('explanation')->label('Explanation'),
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
            'index' => Pages\ListExplanations::route('/'),
            'create' => Pages\CreateExplanation::route('/create'),
            'edit' => Pages\EditExplanation::route('/{record}/edit'),
        ];
    }
}
