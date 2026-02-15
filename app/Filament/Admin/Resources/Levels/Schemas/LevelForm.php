<?php

namespace App\Filament\Admin\Resources\Levels\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;


class LevelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('title')
                    ->label('Judul Level')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(4),

                Forms\Components\TextInput::make('order')
                    ->label('Urutan Level')
                    ->numeric()
                    ->required(),
            ]);
    }
}
