<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\OrderResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use App\Models\Order;
use Filament\Tables\Actions\Action;

class LatestOrders extends BaseWidget
{

    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;


    public function table(Table $table): Table
    {
        return $table
            ->query(OrderResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')

            ->columns([
                    TextColumn::make('id')
                    ->label('ID')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('user.name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('grand_total')
                    ->money('NPR')    
                    ->searchable()
                    ->sortable(),


                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'info',
                        'processing' => 'warning',
                        'shipped' => 'success',
                        'delivered' => 'success',
                        'cancelled' => 'danger',
                    })
                    ->label('Order Status')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('payment_method')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('payment_status')
                    ->searchable()
                    ->sortable()
                    ->badge(),
                
                TextColumn::make('created_at')
                    ->label('Order Date')
                    ->dateTime(),
                
            ])
            ->actions([
                Action::make('View Order')
                ->url(fn(Order $record):string => OrderResource::getUrl('view', ['record' => $record]))
                ->color('info')
                ->icon('heroicon-o-eye'),

                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
