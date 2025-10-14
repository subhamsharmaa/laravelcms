<?php
namespace App\Filament\Forms;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class SeoFields
{
    public static function make():Section
    {
        return Section::make('SEO')
            ->schema([
                TextInput::make('meta_title')
                    ->label('Meta Title')
                    ->maxLength(255)
                    ->placeholder('Enter SEO title'),

                Textarea::make('meta_description')
                    ->label('Meta Description')
                    ->rows(3)
                    ->placeholder('Short description for search engines'),

                TagsInput::make('meta_keywords')
                    ->label('Meta Keywords')
                    ->placeholder('Add keywords (press Enter)'),
            ])
            ->collapsible();
    }
}