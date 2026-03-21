<?php

namespace App\Filament\App\Resources\Books\Tables;

use App\Enums\Books\BookStatus;
use App\Filament\Tables\Columns\RatingColumn;
use App\Models\BookUser;
use Filament\Actions\Action;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\TextSize;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class BooksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
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
                    ImageColumn::make('image')
                        ->imageWidth(80)
                        ->imageHeight('auto')
                        ->grow(false),
                ]),
            ])->contentGrid([
                'default' => 1,
                'md' => 2,
            ])
            ->recordActions([
                Action::make('request')
                    ->label('Solicitar libro')
                    ->button()
                    ->outlined()
                    ->size('xs')
                    ->icon('heroicon-o-clock')
                    ->action(function ($record) {
                        BookUser::updateOrCreate(
                            [
                                'user_id' => Auth::id(),
                                'book_id' => $record->id,
                            ],
                            [
                                'status' => BookStatus::Requested,
                                'requested_at' => now(),
                            ],
                        );
                    })
                    ->visible(fn ($record) => ! in_array($record?->currentBorrow?->status, [
                        BookStatus::Requested,
                        BookStatus::Borrowed,
                    ])),
            ])
            ->searchPlaceholder('Búsqueda por título o autor');
    }
}
