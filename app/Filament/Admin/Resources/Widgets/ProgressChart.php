<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\User;
use App\Models\Level;

class ProgressChart extends ChartWidget
{
    protected ?string $heading = 'Progress Chart';

    protected function getData(): array
    {
         $totalLevel = Level::count();

        $data = [
            '0–25%' => 0,
            '26–50%' => 0,
            '51–75%' => 0,
            '76–100%' => 0,
        ];

        User::withCount('levels')->get()->each(function ($user) use ($totalLevel, &$data) {
            if ($totalLevel === 0) return;

            $percent = ($user->levels_count / $totalLevel) * 100;

            match (true) {
                $percent <= 25 => $data['0–25%']++,
                $percent <= 50 => $data['26–50%']++,
                $percent <= 75 => $data['51–75%']++,
                default => $data['76–100%']++,
            };
        });
        return [
             'datasets' => [
                [
                    'label' => 'Jumlah Siswa',
                    'data' => array_values($data),
                ],
            ],
            'labels' => array_keys($data),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
