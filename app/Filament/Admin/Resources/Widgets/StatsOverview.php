<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\Level;


class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $averageProgress = User::withCount('levels')
            ->get()
            ->avg('levels_count') ?? 0;

        return [
            Stat::make('Total Siswa', User::count())
                ->description('Jumlah akun terdaftar')
                ->icon('heroicon-o-users'),

            Stat::make('Total Level', Level::count())
                ->description('Jumlah level pembelajaran')
                ->icon('heroicon-o-academic-cap'),

            Stat::make(
                'Rata-rata Progress',
                number_format($averageProgress, 1) . ' Level'
            )
                ->description('Rata-rata level diselesaikan')
                ->icon('heroicon-o-chart-bar'),
        ];
    }
}

