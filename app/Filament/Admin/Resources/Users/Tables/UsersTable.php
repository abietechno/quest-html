<?php

namespace App\Filament\Admin\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->circular()
                    ->size(40)
                    ->defaultImageUrl(asset('avatars/default.png'))
                    ->getStateUsing(fn ($record) =>
                        asset('avatars/' . ($record->avatar ?? 'default.png'))
                    ),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('total_score')
                    ->label('Total Score')
                    ->state(fn ($record) => $record->totalScore())
                    ->badge()
                    ->color('warning'),

                BadgeColumn::make('progress')
                    ->label('Progress')
                    ->state(fn ($record) => $record->progressPercentage() . '%')
                    ->color(fn ($record) =>
                        $record->progressPercentage() === 100 ? 'success' : 'warning'
                    ),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Terdaftar')
                    ->date(),
            ])
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
