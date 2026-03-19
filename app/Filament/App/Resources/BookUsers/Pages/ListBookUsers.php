<?php

namespace App\Filament\App\Resources\BookUsers\Pages;

use App\Filament\App\Resources\BookUsers\BookUserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBookUsers extends ListRecords
{
    protected static string $resource = BookUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
