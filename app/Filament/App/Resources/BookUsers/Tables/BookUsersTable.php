<?php

namespace App\Filament\App\Resources\BookUsers\Tables;

use App\Enums\Books\BookStatus;
use App\Filament\App\Resources\Books\BookResource;
use App\Filament\Forms\Components\Rating;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\RichEditor;
use Filament\Notifications\Notification;
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

                        TextColumn::make('updated_at')
                            ->since()
                            ->extraAttributes(['class' => 'text-xs text-gray-500']),

                        TextColumn::make('status')
                            ->state('Se solicita la devolución.')
                            ->badge()
                            ->icon('heroicon-o-clock')
                            ->visible(fn ($record) => $record?->return_requested_at && $record->status === BookStatus::Borrowed),
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
                    ->successNotificationTitle('Solicitud cancelada')
                    ->failureNotificationTitle('No se pudo cancelar la solicitud. Inténtalo de nuevo más tarde.'),

                Action::make('return_book')
                    ->label('Return Book')
                    ->button()
                    ->outlined()
                    ->size('xs')
                    ->icon('heroicon-o-arrow-left-circle')
                    ->visible(fn ($record) => $record->status === BookStatus::Borrowed && ! $record->return_requested_at)
                    ->modalHeading('¿Te gustó el libro?')
                    ->modalDescription('Sus comentarios nos ayudan a mejorar nuestras recomendaciones.')
                    ->schema([
                        Rating::make('rating')
                            ->required(),
                        // Select::make('rating')
                        //     ->label('Califica el libro.')
                        //     ->options([
                        //         5 => '5 - Excelente',
                        //         4 => '4 - Muy bueno',
                        //         3 => '3 - Bueno',
                        //         2 => '2 - Razonable',
                        //         1 => '1 - Escaso',
                        //     ])
                        //     ->required(),
                        RichEditor::make('review')
                            ->label('Escribe una reseña')
                            ->placeholder('Comparte tu opinión sobre el libro...')
                            ->toolbarButtons(
                                ['bold', 'italic', 'underline', 'h2', 'h3']
                            ),
                    ])
                    ->action(function ($record, $data) {
                        $record->update([
                            'return_requested_at' => now(),
                            'rating' => $data['rating'],
                            'review' => $data['review'],
                        ]);
                    })
                    ->successNotification(
                        Notification::make('return_requested')
                            ->title('Solicitud realizada con éxito')
                            ->body('¡Gracias por tus comentarios! Te notificaremos cuando se procese tu devolución.')
                            ->icon('heroicon-o-check-circle')
                    )
                    ->failureNotification(
                        Notification::make('return_requested')
                            ->title('No se solicitó la devolución.')
                            ->body('Inténtelo de nuevo más tarde. O póngase en contacto con el servicio de asistencia si el problema persiste.')
                    ),
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
            ->emptyStateActions([
                Action::make('browse_books')
                    ->label('Explorar libros')
                    ->url(BookResource::getUrl())
                    ->button(),
            ])
            ->searchPlaceholder('Búsqueda por título o autor');
    }
}
