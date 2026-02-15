<?php
namespace App\Filament\Admin\Resources\Users\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class LevelsRelationManager extends RelationManager
{
    protected static string $relationship = 'levels';

    protected static ?string $title = 'Progress Level';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Level')
                    ->sortable(),

                Tables\Columns\TextColumn::make('pivot.score')
                    ->label('Score')
                    ->badge()
                    ->color('warning'),

                Tables\Columns\IconColumn::make('pivot.quiz_passed')
                    ->label('Quiz')
                    ->boolean(),

                Tables\Columns\TextColumn::make('progress')
                    ->label('Progress')
                    ->state(fn ($record) =>
                        $this->getOwnerRecord()->levelProgress($record) . '%'
                    )
                    ->badge(),

                Tables\Columns\TextColumn::make('pivot.completed_at')
                    ->label('Selesai')
                    ->date()
                    ->placeholder('-'),
            ]);
    }
}