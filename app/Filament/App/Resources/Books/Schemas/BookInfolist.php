<?php

namespace App\Filament\App\Resources\Books\Schemas;

use App\Enums\Books\BookStatus;
use App\Filament\App\Resources\BookUsers\BookUserResource;
use App\Filament\Infolists\Components\Rating;
use App\Models\BookUser;
use Filament\Actions\Action;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\EmptyState;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Text;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Auth;

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
                                Rating::make('average_rating')
                                    ->label('Clasificación')
                                    ->placeholder('Sin calificación'),
                                TextEntry::make('borrowed_count')
                                    ->label('Prestado')
                                    ->state(fn ($record) => $record->users()->count().' veces'),
                                Actions::make([
                                    Action::make('request')
                                        ->label('Solicitar libro')
                                        ->button()
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
                                        ->successNotification(
                                            Notification::make()
                                                ->title('Libro solicitado')
                                                ->actions([
                                                    Action::make('view_requests')
                                                        ->label('View all requests')
                                                        ->url(BookUserResource::getUrl())
                                                        ->button()
                                                        ->size('xs'),
                                                ])
                                                ->persistent(true)
                                        )
                                        ->visible(fn ($record) => ! in_array($record?->currentBorrow?->status, [
                                            BookStatus::Requested,
                                            BookStatus::Borrowed,
                                        ])),
                                ]),
                            ]),

                        ImageEntry::make('image')
                            ->hiddenLabel()
                            ->imageWidth('100%')
                            ->imageHeight('auto')
                            ->placeholder('-')
                            ->extraImgAttributes([
                                'class' => 'rounded-lg shadow-md',
                            ]),
                        Text::make('Reseñas de usuarios')
                            ->extraAttributes([
                                'class' => 'text-base font-semibold col-span-full',
                            ]),
                        RepeatableEntry::make('reviews')
                            ->hiddenLabel()
                            ->state(fn ($record) => $record->reviews()->latest()->take(4)->get())
                            ->schema([
                                TextEntry::make('review')
                                    ->hiddenLabel()
                                    ->html(),
                                TextEntry::make('user.name')
                                    ->hiddenLabel()
                                    ->extraAttributes([
                                        'class' => 'italic text-sm text-primary-600',
                                    ]),
                            ])
                            ->columnSpanFull(),
                        EmptyState::make('Sin reseñas todavía')
                            ->description('Este libro aún no tiene reseñas de lectores.')
                            ->icon(Heroicon::OutlinedChatBubbleLeftEllipsis)
                            ->columnSpanFull()
                            ->visible(fn ($record) => ! $record->reviews()->exists()),

                    ])
                    ->dense(),
            ]);
    }
}
