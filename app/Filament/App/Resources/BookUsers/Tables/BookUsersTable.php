<?php

namespace App\Filament\App\Resources\BookUsers\Tables;

use App\Enums\Books\BookStatus;
use Filament\Actions\DeleteAction;
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
                    Stack::make([
                        TextColumn::make('book.title')
                            ->size(TextSize::Large)
                            ->weight(FontWeight::SemiBold)
                            ->searchable(),

                        TextColumn::make('book.author')
                            ->color('primary')
                            ->searchable(),

                        TextColumn::make('created_at')
                            ->since()
                            ->extraAttributes(['class' => 'text-xs text-gray-500']),
                    ])->space(1),

                    ImageColumn::make('book.image')
                        ->imageWidth(80)
                        ->imageHeight('auto')
                        ->grow(false),
                ]),
            ])->contentGrid([
                'default' => 1,
                'md' => 2,
            ])
            ->recordActions([
                DeleteAction::make('delete')
                    ->label('Solicitud de cancelación')
                    ->button()
                    ->outlined()
                    ->size('xs')
                    ->modalHeading('Cancelar solicitud de reserva')
                    ->modalDescription('¿Está seguro de que desea cancelar su solicitud de este libro?')
                    ->modalSubmitActionLabel('Si')
                    ->modalCancelActionLabel('No')
                    ->visible(fn ($record) => $record->status === BookStatus::Requested)
            ])
            ->emptyStateHeading(
                function ($livewire) {

                    return match ($livewire->activeTab) {
                        BookStatus::Borrowed->value => 'Todavía no has tomado prestado ningún libro.',
                        BookStatus::Requested->value => 'Aún no has solicitado ningún libro.',
                        BookStatus::Returned->value => 'Todavía no has leído ningún libro.',

                        default => 'No se encontraron libros',
                    };
                }
            )->emptyStateIcon('heroicon-o-book-open')
            ->searchPlaceholder('Búsqueda por título o autor');
    }
}
