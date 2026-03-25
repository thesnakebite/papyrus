<?php

namespace App\Filament\App\Widgets;

use App\Enums\Books\BookStatus;
use Filament\Widgets\Widget;

class CurrentlyReading extends Widget
{
    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = [
        'default' => 1,
        'md' => 6,
    ];

    protected string $view = 'filament.app.widgets.currently-reading';

    public array $books = [];

    public function mount(): void
    {
        $this->books = auth()->user()->books()
            ->wherePivot('status', BookStatus::Borrowed)
            ->get()
            ->toArray();
    }
}
