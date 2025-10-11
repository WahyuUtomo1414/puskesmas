<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('spesialist')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('doctor')
                    ->required()
                    ->columnSpanFull(),
                Repeater::make('schedule')
                    ->label('Schedule')
                    ->schema([
                        TextInput::make('day')
                            ->label('Day')
                            ->placeholder('e.g. Monday')
                            ->required(),

                        TextInput::make('time')
                            ->label('Time')
                            ->placeholder('e.g. 08:00 - 17:00')
                            ->required(),
                    ])
                    ->columns(2)
                    ->required()
                    ->columnSpanFull()
                    ->addActionLabel('Add Schedule')
                    ->defaultItems(1),
                Toggle::make('active')
                    ->required(),
            ]);
    }
}
