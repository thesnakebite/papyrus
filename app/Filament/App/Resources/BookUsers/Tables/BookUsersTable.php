<?php

namespace App\Filament\App\Resources\BookUsers\Tables;

use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\TextSize;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BookUsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    ImageColumn::make('book.image')
                        ->imageWidth(80)
                        ->imageHeight('auto')
                        ->grow(false),

                    Stack::make([
                        TextColumn::make('book.title')
                            ->size(TextSize::Large)
                            ->weight(FontWeight::SemiBold)
                            ->searchable(),

                        TextColumn::make('book.author')
                            ->color('primary')
                            ->searchable(),
                    ])->space(1),
                ]),
            ])->contentGrid([
                'default' => 1,
                'md' => 2,
            ]);
    }
}
