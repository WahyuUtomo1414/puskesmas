<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner')
                    ->label('Banner')
                    ->square()
                    ->imageHeight(50),

                ImageColumn::make('icon')
                    ->label('Icon')
                    ->square()
                    ->imageHeight(40),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->limit(50)
                    ->toggleable(),

                TextColumn::make('schedule')
                    ->label('Schedule'),

                IconColumn::make('active')
                    ->boolean(),
                TextColumn::make('createdBy.name')
                    ->label('Created By'),
                TextColumn::make('updatedBy.name')
                    ->label("Updated by"),
                TextColumn::make('deletedBy.name')
                    ->label("Deleted by"),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
