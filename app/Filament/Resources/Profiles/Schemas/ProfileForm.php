<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('story')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('vision')
                    ->required(),
                TextInput::make('mision')
                    ->required(),
                TextInput::make('motto')
                    ->required(),
                TextInput::make('struktur_organisasi')
                    ->required(),
                Toggle::make('active')
                    ->required(),
                TextInput::make('created_by')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('updated_by')
                    ->numeric(),
                TextInput::make('deleted_by')
                    ->numeric(),
            ]);
    }
}
