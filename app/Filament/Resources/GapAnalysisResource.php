<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GapAnalysisResource\Pages;
use App\Filament\Resources\GapAnalysisResource\RelationManagers;
use App\Models\GapAnalysis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GapAnalysisResource extends Resource
{
    protected static ?string $model = GapAnalysis::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationGroup = 'ISO 9001 Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sub_sub_clause_id')
                    ->relationship('subSubClause', 'title')->required(),
                Forms\Components\TextInput::make('doc_exist_done')->required(),
                Forms\Components\TextInput::make('doc_exist_not_done')->required(),
                Forms\Components\TextInput::make('doc_not_exist_done')->required(),
                Forms\Components\TextInput::make('doc_not_exist_not_done')->required(),
                Forms\Components\TextInput::make('action_plan')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subSubClause.title')->label('Sub Sub Clause'),
                Tables\Columns\TextColumn::make('doc_exist_done')->label('Doc Exist Done'),
                Tables\Columns\TextColumn::make('doc_exist_not_done')->label('Doc Exist Not Done'),
                Tables\Columns\TextColumn::make('doc_not_exist_done')->label('Doc Not Exist Done'),
                Tables\Columns\TextColumn::make('doc_not_exist_not_done')->label('Doc Not Exist Not Done'),
                Tables\Columns\TextColumn::make('action_plan')->label('Action Plan'),
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
            'index' => Pages\ListGapAnalyses::route('/'),
            'create' => Pages\CreateGapAnalysis::route('/create'),
            'edit' => Pages\EditGapAnalysis::route('/{record}/edit'),
        ];
    }
}
