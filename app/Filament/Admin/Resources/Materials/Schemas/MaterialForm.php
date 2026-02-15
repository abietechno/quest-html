<?php

namespace App\Filament\Admin\Resources\Materials\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class MaterialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\Select::make('level_id')
                    ->relationship('level', 'title')
                    ->required(),

                Forms\Components\TextInput::make('title')
                    ->required() // 🔥 INI PENYELAMATNYA
                    ->label('Judul Materi')
                    ->maxLength(255),

                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->required()
                    ->label('Urutan Slide'),
                
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('example_code')
                    ->label('Contoh Kode HTML')
                    ->rows(10)
                    ->columnSpanFull()
                    ->extraAttributes(['class' => 'font-mono'])
             ]);
    }
}
