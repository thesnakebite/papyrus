<?php

namespace App\Filament\App\Resources\Books\Tables;

use App\Enums\Books\BookStatus;
use App\Filament\Tables\Columns\RatingColumn;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\TextSize;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BooksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    ImageColumn::make('image')
                        ->imageWidth(80)
                        ->imageHeight('auto')
                        ->grow(false),
                    Stack::make([
                        Stack::make([
                            TextColumn::make('title')
                                ->size(TextSize::Large)
                                ->weight(FontWeight::SemiBold)
                                ->searchable(),
                            TextColumn::make('author')
                                ->color('primary')
                                ->searchable(),
                        ]),
                        RatingColumn::make('average_rating'),
                        TextColumn::make('status')
                            ->state(fn ($record) => $record?->currentBorrow?->status)
                            ->formatStateUsing(
                                function ($state) {
                                    return match ($state) {
                                        BookStatus::Requested => 'Solicitado',
                                        BookStatus::Borrowed => 'Actualmente leyendo',
                                        BookStatus::Returned => 'Leído',
                                        default => null,
                                    };
                                }
                            )
                            ->badge()
                            ->color(fn ($state) => match ($state) {
                                BookStatus::Requested => 'warning',
                                BookStatus::Borrowed => 'success',
                                BookStatus::Returned => 'gray',
                                default => null,
                            }),
                    ])->space(3),
                ]),
            ])->contentGrid([
                'default' => 1,
                'md' => 2,
            ])
            ->searchPlaceholder('Búsqueda por título o autor');
    }
}
