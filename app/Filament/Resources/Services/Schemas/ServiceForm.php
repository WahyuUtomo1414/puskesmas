<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->columnSpanFull()
                    ->label('Nama'),
                RichEditor::make('description')
                    ->columnSpanFull()
                    ->label('Deskripsi'),
                FileUpload::make('banner')
                    ->required()
                    ->disk('public')
                    ->directory('service')
                    ->image()
                    ->columnSpanFull(),
                FileUpload::make('icon')
                    ->required()
                    ->directory('service')
                    ->image()
                    ->disk('public')
                    ->columnSpanFull(),    
                Repeater::make('schedule')
                    ->label('Schedule')
                    ->schema([
                        TextInput::make('day')
                            ->label('Hari')
                            ->placeholder('e.g. Monday')
                            ->required(),

                        TextInput::make('time')
                            ->label('Waktu')
                            ->placeholder('e.g. 08:00 - 17:00')
                            ->required(),
                    ])
                    ->columns(2)
                    ->required()
                    ->columnSpanFull()
                    ->addActionLabel('Tambah Schedule')
                    ->defaultItems(1),
                FileUpload::make('image')
                    ->image()
                    ->directory('service')
                    ->image()
                    ->disk('public')
                    ->multiple()
                    ->required()
                    ->columnSpanFull(),      
                Toggle::make('active')
                    ->required()
                    ->label('Aktif'),
            ]);
    }
}
