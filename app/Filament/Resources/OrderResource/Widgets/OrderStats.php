<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Order;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Orders', Order::query()->where('status', 'new')->count())
                ->description('New orders placed')
                ->descriptionIcon('heroicon-m-plus-circle')
                ->color('success')
                ->chart([5, 10, 1, 20, 12, 30, 35])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => "\$dispatch('setStatusFilter', { filter: 'new' })"
                ]),
            Stat::make('Pending Orders', Order::query()->where('status', 'processing')->count())
                ->description('Orders being processed')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning')
                ->chart([10, 20, 30, 10, 50, 30, 70])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processing' })"
                ]),
            Stat::make('Completed Orders', Order::query()->where('status', 'delivered')->count())
                ->description('Orders delivered successfully')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success')
                ->chart([15, 5, 45, 35, 30, 90, 10])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => "\$dispatch('setStatusFilter', { filter: 'delivered' })"
                ]),
            Stat::make('Cancelled Orders', Order::query()->where('status', 'cancelled')->count())
                ->description('Orders cancelled')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('danger')
                ->chart([2, 40, 16, 18, 10, 15, 14])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => "\$dispatch('setStatusFilter', { filter: 'cancelled' })"
                ]),
        ];
    }
}