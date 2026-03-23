<?php

namespace App\Filament\App\Resources\BookUsers\Pages;

use App\Enums\Books\BookStatus;
use App\Filament\App\Resources\BookUsers\BookUserResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListBookUsers extends ListRecords
{
    protected static string $resource = BookUserResource::class;

    public function getTabs(): array
    {
        return [
            BookStatus::Requested->value => Tab::make('Solicitados')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', BookStatus::Requested))
                ->icon('tabler-clock-plus')
                ->badge(
                    fn () => auth()->user()->books()->where('status', BookStatus::Requested)->count()
                ),
            BookStatus::Borrowed->value => Tab::make('Prestados')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', BookStatus::Borrowed))
                ->icon('tabler-book')
                ->badge(
                    fn () => auth()->user()->books()->where('status', BookStatus::Borrowed)->count()
                ),
            BookStatus::Returned->value => Tab::make('Devueltos')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', BookStatus::Returned))
                ->icon('tabler-book-2')
                ->badge(
                    fn () => auth()->user()->books()->where('status', BookStatus::Returned)->count()
                ),
        ];
    }
}
