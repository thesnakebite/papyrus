<?php

namespace App\Filament\App\Resources\BookUsers\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookUserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('book_id')
                    ->relationship('book', 'title')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('status')
                    ->required(),
                TextInput::make('rating')
                    ->numeric(),
                Textarea::make('review')
                    ->columnSpanFull(),
                DateTimePicker::make('requested_at'),
                DateTimePicker::make('borrowed_at'),
                DateTimePicker::make('returned_at'),
                DateTimePicker::make('return_requested_at'),
            ]);
    }
}
