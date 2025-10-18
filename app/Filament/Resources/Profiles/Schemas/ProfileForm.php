<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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
                RichEditor::make('story')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('vision')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('mision')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('motto')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('struktur_organisasi')
                    ->required()
                    ->image()
                    ->directory('profile')
                    ->columnSpanFull(),
                Toggle::make('active')
                    ->required()
                    ->label('Aktif'),
            ]);
    }
}
