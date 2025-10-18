<?php

namespace App\Filament\Resources\Doctors\Schemas;

use App\Models\Service;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
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
                Select::make('id_service')
                    ->label('Service')
                    ->options(Service::all()->pluck('name', 'id'))
                    ->columnSpanFull(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('spesialist')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('doctor')
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
                    ->required()
                    ->label('Aktif'),
            ]);
    }
}
