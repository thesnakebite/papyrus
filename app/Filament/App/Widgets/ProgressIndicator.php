<?php

namespace App\Filament\App\Widgets;

use App\Enums\Books\BookStatus;
use Filament\Widgets\Widget;

class ProgressIndicator extends Widget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = [
        'default' => 1,
        'md' => 6,
    ];

    protected string $view = 'filament.app.widgets.progress-indicator';

    public int $booksRead = 0;

    public int $target = 10;

    public float $progress = 0;

    public function mount(): void
    {
        $this->booksRead = auth()->user()->books()->where('status', BookStatus::Returned)->count();
        $this->progress = min(100, ($this->booksRead / $this->target) * 100);
    }
}
