<?php

namespace App\Filament\Resources\Blogs\Schemas;

use App\Models\Category;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('id_category')
                    ->required()
                    ->label('Category')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('banner')
                    ->required()
                    ->directory('blog')
                    ->image()
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->directory('blog')
                    ->image()
                    ->multiple()
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('active')
                    ->required(),
            ]);
    }
}
