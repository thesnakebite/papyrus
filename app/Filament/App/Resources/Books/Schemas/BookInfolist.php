<?php

namespace App\Filament\App\Resources\Books\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BookInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns([
                        'sm' => 4,
                        'xl' => 5,
                    ])
                    ->columnSpanFull()
                    ->schema([
                        Grid::make()
                            ->columnSpan([
                                'sm' => 3,
                                'xl' => 4,
                            ])
                            ->schema([
                                TextEntry::make('title')
                                    ->hiddenLabel()
                                    ->columnSpanFull()
                                    ->extraAttributes([
                                        'class' => 'text-3xl xl:text-4xl font-bold',
                                    ]),
                                TextEntry::make('author')
                                    ->hiddenLabel()
                                    ->columnSpanFull()
                                    ->extraAttributes([
                                        'class' => 'text-primary-600 font-medium text-lg',
                                    ]),
                                TextEntry::make('description')
                                    ->hiddenLabel()
                                    ->columnSpanFull()
                                    ->extraAttributes([
                                        'class' => 'text-base',
                                    ]),
                                TextEntry::make('average_rating')
                                    ->label('Clasificación')
                                    ->placeholder('Sin calificación'),
                                TextEntry::make('borrowed_count')
                                    ->label('Prestado')
                                    ->state(fn ($record) => $record->users()->count().' veces'),
                            ]),

                        ImageEntry::make('image')
                            ->hiddenLabel()
                            ->imageWidth('100%')
                            ->imageHeight('auto')
                            ->placeholder('-')
                            ->extraImgAttributes([
                                'class' => 'rounded-lg shadow-md',
                            ]),
                    ])
                    ->dense(),
            ]);
    }
}
