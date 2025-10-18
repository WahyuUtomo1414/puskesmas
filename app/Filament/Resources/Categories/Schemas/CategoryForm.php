<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label('Nama')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull()
                    ->label('Deskripsi'),
                Toggle::make('active')
                    ->required()
                    ->label('Aktif'),
            ]);
    }
}
