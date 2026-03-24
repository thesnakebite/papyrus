<?php

namespace App\Filament\App\Widgets;

use App\Enums\Books\BookStatus;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ReadingStats extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected int|string|array $columnSpan = [
        'default' => 1,
        'md' => 6,
    ];

    protected function getStats(): array
    {
        return [
            Stat::make('Leyendo desde', (int) auth()->user()->created_at->diffInDays(now()))
                ->description('Días desde que te uniste')
                ->descriptionIcon('tabler-calendar')
                ->color('primary')
                ->extraAttributes([
                    'class' => 'h-full',
                ]),
            Stat::make('Libros leídos', auth()->user()->books()->where('status', BookStatus::Returned)->count())
                ->description('Total de libros hasta la fecha')
                ->descriptionIcon('tabler-book')
                ->color('primary')
                ->extraAttributes([
                    'class' => 'h-full',
                ]),

            Stat::make('Velocidad de lectura', function () {
                $monthsSinceJoining = auth()->user()->created_at->diffInDays(now()) / 30;
                $booksRead = auth()->user()->books()->where('status', 'returned')->count();
                if ($monthsSinceJoining === 0) {
                    return 0;
                }

                return round($booksRead / $monthsSinceJoining);
            })
                ->description('Promedio de libros por mes')
                ->descriptionIcon('tabler-chart-line')
                ->color('primary')
                ->extraAttributes([
                'class' => 'h-full',
            ]),
        ];
    }
}
