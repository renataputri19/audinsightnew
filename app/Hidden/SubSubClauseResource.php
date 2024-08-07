<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubSubClauseResource\Pages;
use App\Filament\Resources\SubSubClauseResource\RelationManagers;
use App\Models\SubSubClause;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class SubSubClauseResource extends Resource
{
    protected static ?string $model = SubSubClause::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sub_clause_id')
                    ->relationship('subClause', 'title')->required(),
                Forms\Components\TextInput::make('number')->required(),
                Forms\Components\TextInput::make('title')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subClause.title')->label('Sub Clause'),
                Tables\Columns\TextColumn::make('number'),
                Tables\Columns\TextColumn::make('title'),
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
            'index' => Pages\ListSubSubClauses::route('/'),
            'create' => Pages\CreateSubSubClause::route('/create'),
            'edit' => Pages\EditSubSubClause::route('/{record}/edit'),
        ];
    }
}
