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
                    ->columnSpanFull()
                    ->label('Sejarah'),
                Textarea::make('vision')
                    ->required()
                    ->columnSpanFull()
                    ->label('Visi'),
                Textarea::make('mision')
                    ->required()
                    ->columnSpanFull()
                    ->label('Misi'),
                Textarea::make('motto')
                    ->required()
                    ->columnSpanFull()
                    ->label('Moto'),
                FileUpload::make('struktur_organisasi')
                    ->required()
                    ->image()
                    ->directory('profile')
                    ->columnSpanFull()
                    ->label('Struktur Organisasi'),
                Toggle::make('active')
                    ->required()
                    ->label('Aktif'),
            ]);
    }
}
