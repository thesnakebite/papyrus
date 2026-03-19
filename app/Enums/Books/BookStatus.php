<?php

namespace App\Enums\Books;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum BookStatus: string implements HasColor, HasIcon, HasLabel
{
    case Requested = 'requested';
    case Borrowed = 'borrowed';
    case Returned = 'returned';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::Requested => 'Solicitado',
            self::Borrowed => 'Prestado',
            self::Returned => 'Devuelto',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            BookStatus::Requested => 'info',
            BookStatus::Borrowed => 'warning',
            BookStatus::Returned => 'success',
        };
    }

    public function getIcon(): string|BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::Requested => 'heroicon-o-clock',
            self::Borrowed => 'heroicon-o-book-open',
            self::Returned => 'heroicon-o-check',
        };
    }
}
