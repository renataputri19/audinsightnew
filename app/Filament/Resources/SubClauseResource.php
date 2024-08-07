<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubClauseResource\Pages;
use App\Filament\Resources\SubClauseResource\RelationManagers;
use App\Models\SubClause;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubClauseResource extends Resource
{
    protected static ?string $model = SubClause::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'ISO 9001 Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('clause_id')
                    ->relationship('clause', 'title')->required(),
                Forms\Components\TextInput::make('number')->required(),
                Forms\Components\TextInput::make('title')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clause.title')->label('Clause'),
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
            'index' => Pages\ListSubClauses::route('/'),
            'create' => Pages\CreateSubClause::route('/create'),
            'edit' => Pages\EditSubClause::route('/{record}/edit'),
        ];
    }
}
