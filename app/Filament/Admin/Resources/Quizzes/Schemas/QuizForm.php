<?php

namespace App\Filament\Admin\Resources\Quizzes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class QuizForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\Select::make('level_id')
                    ->relationship('level', 'title')
                    ->required(),

                Forms\Components\TextInput::make('question')->required(),

                Forms\Components\TextInput::make('option_a')->required(),
                Forms\Components\TextInput::make('option_b')->required(),
                Forms\Components\TextInput::make('option_c')->required(),
                Forms\Components\TextInput::make('option_d')->required(),

                Forms\Components\Select::make('correct_answer')
                    ->options([
                        'a' => 'A',
                        'b' => 'B',
                        'c' => 'C',
                        'd' => 'D',
                    ])
                    ->required(),

            ]);
    }
}
