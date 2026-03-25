<?php

namespace App\Filament\App\Widgets;

use App\Models\Book;
use Filament\Widgets\Widget;

class Discover extends Widget
{
    protected static ?int $sort = 5;

    protected int|string|array $columnSpan = [
        'default' => 1,
        'md' => 2,
    ];

    protected string $view = 'filament.app.widgets.discover';

    public ?Book $book;

    public function mount(): void
    {
        $this->book = Book::query()->inRandomOrder()->first();
    }
}
