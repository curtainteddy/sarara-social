<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    
    protected ?string $heading = 'General Analytics';
 
    protected ?string $description = 'Overview of monthly analytics.';

    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
        Stat::make('Total Users', '2.1k')
            ->description('+152 Increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })"
            ]),
        Stat::make('Server Downtime', '4%')
            ->description('-2% Decrease')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->chart([17, 2, 5, 3, 15, 4, 2])
            ->color('danger')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })"
            ]),
        Stat::make('Average Time on App', '7:12')
            ->description('+16% Increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 20, 10, 3, 25, 4, 45])
            ->color('success')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })"
            ]),
            
        Stat::make('Total Sales', 'रु.२,३४,५२३')
            ->description('+४३,३८२ Increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 32, 10, 3, 15, 4, 50])
            ->color('success')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })"
            ]),
        ];
    }
}
