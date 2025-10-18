<?php

namespace App\Filament\Resources\Benners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BennerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label('Nama')
                    ->columnSpanFull()
                    ->maxLength(128),
                TextInput::make('position')
                    ->required()
                    ->label('Posisi')
                    ->columnSpanFull()
                    ->maxLength(128),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('benner')
                    ->columnSpanFull()
                    ->required(),
                Toggle::make('active')
                    ->required()
                    ->label('Aktif'),
            ]);
    }
}
